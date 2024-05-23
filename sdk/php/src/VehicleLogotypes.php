<?php

declare(strict_types = 1);

namespace AvtoDev\VehicleLogotypes;

use Illuminate\Support\Collection;

/**
 * @extends Collection<string, array<string, mixed>>
 */
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
        /** @var array<string, array<string, mixed>> $json */
        $json = \json_decode((string) \file_get_contents(__DIR__ . '/../../../src/vehicle-logotypes.json'), true, 512, JSON_THROW_ON_ERROR);

        return new self($json);
    }
}
