<?php

declare(strict_types = 1);

namespace AvtoDev\VehicleLogotypes;

final class VehicleLogotypes extends \Illuminate\Support\Collection
{
    /**
     * Create new instance with data.
     *
     * @throws \JsonException
     *
     * @return VehicleLogotypes<string, array<string, mixed>>
     */
    public static function create(): self
    {
        /** @var array<string, mixed> $data */
        $data = \json_decode((string) \file_get_contents(__DIR__ . '/../../../src/vehicle-logotypes.json'), true, 512, JSON_THROW_ON_ERROR);

        return new self($data);
    }
}
