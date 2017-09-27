<?php

namespace PragmaBroadvertising\SolarEdge\Models;

use Carbon\Carbon;
use PragmaBroadvertising\SolarEdge\Interfaces\ApiConnectorInterface;


class SolarEdge
{
    protected $connector;

    public function __construct(ApiConnectorInterface $connector) {
        $this->connector = $connector;
    }

    /**
     * Get Site details
     * @return mixed
     */
    function details(){
        $request = $this->connector->getFromSite('details');

        $details = collect();

        $details->id                = $request->id;
        $details->name              = $request->name;
        $details->accountId         = $request->accountId;
        $details->status            = $request->status;
        $details->peakPower         = $request->peakPower;
        $details->lastUpdateTime    = $request->lastUpdateTime;
        $details->installationDate  = $request->installationDate;
        $details->ptoDate           = $request->ptoDate;
        $details->notes             = $request->notes;
        $details->type              = $request->type;
        $details->location          = $request->location;
        $details->primaryModule     = $request->primaryModule;
        $details->uris              = $request->uris;
        $details->publicSettings    = $request->publicSettings;

        return $details;
    }

    /**
     * Get Site energy
     * @return mixed
     */
    function energy($subtractDays, $order){
        $start = Carbon::now()->subDays($subtractDays-1)->format('Y-m-d');
        $end = Carbon::now()->format('Y-m-d');
        $request = $this->connector->getFromSiteWithStartAndEnd('energy','QUARTER_OF_AN_HOUR', $start, $end);

        $energy = collect();

        $energy->measured_by = $request->measuredBy;
        $energy->unit = $request->unit;

        switch ($order) {
            case 'asc':
                $energy->days = collect($request->values)->sortBy('date')->reverse();
                break;
            case 'desc':
                $energy->days = collect($request->values)->sortBy('date');
                break;
        }

        return $energy;
    }

    /**
     * Get Site power
     * @return mixed
     */
    function power($subtractDays, $order){
        $start = Carbon::now()->subDays($subtractDays-1)->format('Y-m-d%20H:i:s');
        $end = Carbon::now()->format('Y-m-d%20H:i:s');
        $request = $this->connector->getFromSiteWithStartAndEnd('power','DAY', $start, $end,true);

        $power = collect();

        $power->interval    = $request->timeUnit;
        $power->unit        = $request->unit;

        switch ($order) {
            case 'asc':
                $power->days    = collect($request->values)->sortBy('date')->reverse();
                break;
            case 'desc':
                $power->days    = collect($request->values)->sortBy('date');
                break;
        }

        return $power;
    }

    /**
     * Get Site overview
     * @return mixed
     */
    function overview(){
        $request = $this->connector->getFromSite('overview');

        $overview = collect();

        $overview->measuredBy   = $request->measuredBy;
        $overview->lastUpdate   = $request->lastUpdateTime;
        $overview->lifeTime     = $request->lifeTimeData->energy;
        $overview->lastYear     = $request->lastYearData->energy;
        $overview->lastMonth    = $request->lastMonthData->energy;
        $overview->lastDay      = $request->lastDayData->energy;
        $overview->currentPower = $request->currentPower->power;
        $overview->powerUnit    = 'W';
        $overview->energyUnit   = 'Wh';

        return $overview;
    }
}
