<?php

use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Taks::class)->create([
            'nome'=>'Estudar php',
            'complet'=>false,
        ]);
        factory(App\Taks::class)->create([
            'nome'=>'Estudar javaScript',
            'complet'=>false,
        ]);
        factory(App\Taks::class)->create([
            'nome'=>'Estudar laravel',
            'complet'=>false,
        ]);
    }
}
