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
                'start_date' => Carbon::create(2025, 1, 15, 10, 0, 0)->format('Y-m-d H:i'),
                'end_date' => Carbon::create(2025, 1, 15, 12, 0, 0)->format('Y-m-d H:i'),
            ],
            [
                'title' => 'Evento de prueba 2',
                'description' => 'Descripción del evento 2',
                'start_date' => Carbon::create(2025, 2, 10, 14, 0, 0)->format('Y-m-d H:i'),
                'end_date' => Carbon::create(2025, 2, 10, 16, 0, 0)->format('Y-m-d H:i'),
            ],
            [
                'title' => 'Evento de prueba 3',
                'description' => 'Descripción del evento 3',
                'start_date' => Carbon::create(2025, 3, 5, 9, 0, 0)->format('Y-m-d H:i'),
                'end_date' => Carbon::create(2025, 3, 5, 11, 0, 0)->format('Y-m-d H:i'),
            ],
            [
                'title' => 'Evento de prueba 4',
                'description' => 'Descripción del evento 4',
                'start_date' => Carbon::create(2025, 4, 20, 18, 0, 0)->format('Y-m-d H:i'),
                'end_date' => Carbon::create(2025, 4, 20, 20, 0, 0)->format('Y-m-d H:i'),
            ],
            [
                'title' => 'Evento de prueba 5',
                'description' => 'Descripción del evento 5',
                'start_date' => Carbon::create(2025, 5, 25, 13, 0, 0)->format('Y-m-d H:i'),
                'end_date' => Carbon::create(2025, 5, 25, 15, 0, 0)->format('Y-m-d H:i'),
            ],
            [
                'title' => 'Evento de prueba 6',
                'description' => 'Descripción del evento 6',
                'start_date' => Carbon::create(2025, 6, 18, 11, 0, 0)->format('Y-m-d H:i'),
                'end_date' => Carbon::create(2025, 6, 18, 13, 0, 0)->format('Y-m-d H:i'),
            ],
            [
                'title' => 'Evento de prueba 7',
                'description' => 'Descripción del evento 7',
                'start_date' => Carbon::create(2025, 7, 30, 16, 0, 0)->format('Y-m-d H:i'),
                'end_date' => Carbon::create(2025, 7, 30, 18, 0, 0)->format('Y-m-d H:i'),
            ],
            [
                'title' => 'Evento de prueba 8',
                'description' => 'Descripción del evento 8',
                'start_date' => Carbon::create(2025, 8, 12, 8, 0, 0)->format('Y-m-d H:i'),
                'end_date' => Carbon::create(2025, 8, 12, 10, 0, 0)->format('Y-m-d H:i'),
            ],
            [
                'title' => 'Evento de prueba 9',
                'description' => 'Descripción del evento 9',
                'start_date' => Carbon::create(2025, 9, 6, 17, 0, 0)->format('Y-m-d H:i'),
                'end_date' => Carbon::create(2025, 9, 6, 19, 0, 0)->format('Y-m-d H:i'),
            ],
            [
                'title' => 'Evento de prueba 10',
                'description' => 'Descripción del evento 10',
                'start_date' => Carbon::create(2025, 10, 22, 19, 0, 0)->format('Y-m-d H:i'),
                'end_date' => Carbon::create(2025, 10, 22, 21, 0, 0)->format('Y-m-d H:i'),
            ],
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
