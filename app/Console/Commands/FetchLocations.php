<?php

namespace App\Console\Commands;

use App\Models\Location;
use App\Services\Locations\LocationsService;
use Illuminate\Console\Command;

class FetchLocations extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:fetch-locations';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetches recent fuelling locations from a provider.';

    /**
     * Execute the console command.
     */
    public function handle(LocationsService $locationsService)
    {
        $this->info('Fetching locations...');

        $locations = $locationsService->getLocations();

        $locations->each(function ($location) {
            Location::create($location);
        });

        $this->info('Done!');
    }
}
