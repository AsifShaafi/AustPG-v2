<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("events")->insert(
            [
                "id" => 1,
                "event_title" => "STL Basic Workshop",
                "event_organizer" => "AUST CSE Society",
                "event_details" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nunc metus, pulvinar eu euismod et, elementum at massa. Vestibulum congue nulla non leo vulputate rutrum. Morbi vitae quam sagittis enim dapibus gravida a sit amet ligula. Pellentesque consequat semper leo sit amet pharetra. Etiam nec condimentum dui. Pellentesque condimentum vitae nulla vel sagittis. Maecenas pharetra urna sed est molestie, eget lobortis nulla vulputate. Cras elit eros, pulvinar quis iaculis ac, fermentum ut lectus.",
                "event_date" => date('Y-m-d G:i:s', strtotime("10:30 AM 12/07/2018"))
            ]
        );

        DB::table("events")->insert(
            [
                "id" => 2,
                "event_title" => "JAVA Basic Workshop",
                "event_organizer" => "AUST CSE Society",
                "event_details" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nunc metus, pulvinar eu euismod et, elementum at massa. Vestibulum congue nulla non leo vulputate rutrum. Morbi vitae quam sagittis enim dapibus gravida a sit amet ligula. Pellentesque consequat semper leo sit amet pharetra. Etiam nec condimentum dui. Pellentesque condimentum vitae nulla vel sagittis. Maecenas pharetra urna sed est molestie, eget lobortis nulla vulputate. Cras elit eros, pulvinar quis iaculis ac, fermentum ut lectus.",
                "event_date" => date('Y-m-d G:i:s', strtotime("03:30PM 05/14/2018")),
            ]
        );

        DB::table("events")->insert(
            [
                "id" => 3,
                "event_title" => "STL Basic Workshop",
                "event_details" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nunc metus, pulvinar eu euismod et, elementum at massa. Vestibulum congue nulla non leo vulputate rutrum. Morbi vitae quam sagittis enim dapibus gravida a sit amet ligula. Pellentesque consequat semper leo sit amet pharetra. Etiam nec condimentum dui. Pellentesque condimentum vitae nulla vel sagittis. Maecenas pharetra urna sed est molestie, eget lobortis nulla vulputate. Cras elit eros, pulvinar quis iaculis ac, fermentum ut lectus.",
                "event_date" => date('Y-m-d G:i:s', strtotime("11:30 AM 09/20/2018")),
                "event_organizer" => "AUST CSE Society"
            ]
        );

        DB::table("events")->insert(
            [
                "id" => 4,
                "event_title" => "JAVA Basic Workshop",
                "event_organizer" => "AUST CSE Society",
                "event_details" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nunc metus, pulvinar
                 eu euismod et, elementum at massa. Vestibulum congue nulla non leo vulputate rutrum. Morbi vitae quam sagittis enim dapibus gravida a sit amet ligula.
                  Pellentesque consequat semper leo sit amet pharetra. Etiam nec condimentum dui. Pellentesque condimentum vitae nulla vel sagittis. 
                  Maecenas pharetra urna sed est molestie, eget lobortis nulla vulputate. Cras elit eros, pulvinar quis iaculis ac, fermentum ut lectus.",
                "event_date" => date('Y-m-d G:i:s', strtotime("01:30 PM 11/13/2018")),
            ]
        );

    }
}
