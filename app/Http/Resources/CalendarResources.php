<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CalendarResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'event' => $this->event,
            'datefrom' => $this->datefrom,
            'dateto' => $this->dateto,
            'day' => $this->day,
            'active' => $this->active
        ];
    }
}
