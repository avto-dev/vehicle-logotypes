<?php

declare(strict_types = 1);

namespace AvtoDev\VehicleLogotypes;

final class VehicleLogotypes extends \Illuminate\Support\Collection
{
    /**
     * Create new instance with data.
     *
     * @return VehicleLogotypes<string, array<string, mixed>>
     */
    public static function create(): self
    {
        return new self(
            \json_decode((string) \file_get_contents(__DIR__ . '/../../../src/vehicle-logotypes.json'), true)
        );
    }
}
