<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use Illuminate\Support\Carbon;

class EventSeeder extends Seeder
{
    public function run()
    {
        $events = [
            [
                'title' => 'Evento de prueba 1',
                'description' => 'Descripción del evento 1',
                'start_date' => Carbon::create(2023, 1, 15, 10, 0, 0)->format('Y-m-d H:i'),
                'end_date' => Carbon::create(2023, 1, 15, 12, 0, 0)->format('Y-m-d H:i'),
            ]
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
