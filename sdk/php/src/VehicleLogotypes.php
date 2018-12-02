<?php

namespace AvtoDev\VehicleLogotypes;

use Tarampampam\Wrappers\Json;

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
            Json::decode(\file_get_contents(__DIR__ . '/../../../src/vehicle-logotypes.json'), true)
        );
    }
}
