<?php

namespace App\Services\Locations;

use App\Services\Locations\FuellingProviders\ShellFuellingProvider;
use Illuminate\Support\Collection;

class LocationsService
{
    public function getLocations(): Collection
    {
        $provider = app()->make(ShellFuellingProvider::class);

        return $provider->getLocations();
    }
}
