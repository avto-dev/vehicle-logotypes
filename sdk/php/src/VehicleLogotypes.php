<?php

namespace AvtoDev\VehicleLogotypes;

class VehicleLogotypes extends \Illuminate\Support\Collection
{
    /**
     * Create new instance with data.
     *
     * @return self
     */
    public static function create()
    {
        return new static(
            \json_decode(file_get_contents(__DIR__ . '/../../../src/vehicle-logotypes.json'), true)
        );
    }
}
