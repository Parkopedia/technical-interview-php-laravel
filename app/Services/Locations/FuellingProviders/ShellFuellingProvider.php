<?php

namespace App\Services\Locations\FuellingProviders;

use Illuminate\Support\Collection;

class ShellFuellingProvider
{
    public function getLocations(): Collection
    {
        // $locations = Http::get('https://shell-fuelling.com/api/locations');

        return collect(
            json_decode(
                file_get_contents(__DIR__.'/../Fixtures/shell-locations.json'),
                true
            )
        );
    }
}
