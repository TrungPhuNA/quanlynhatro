<?php

namespace App\Console\Commands;

use App\Models\Location;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class SeedLocationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'location:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import Location';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $locations = DB::connection('mysql2')->table('locations')
            ->get();
        foreach ($locations as $location)
        {
            $this->info("ID: ".$location->id);
            Location::insert([
                'id'              => $location->id,
                'loc_name'        => $location->loc_name,
                'loc_slug'        => $location->loc_slug,
                'loc_parent_id'   => $location->loc_parent_id,
                'loc_city_id'     => $location->loc_city_id,
                'loc_district_id' => $location->loc_district_id,
                'loc_street_id'   => $location->loc_street_id,
                'loc_ward_id'     => $location->loc_ward_id,
                'loc_type'        => $location->loc_type,
                'loc_level'       => $location->loc_level,
                'loc_description' => $location->loc_description,
            ]);
        }
    }
}
