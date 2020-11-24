<?php

use Illuminate\Database\Seeder;

class MaintenancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\Maintenance')->create([
        		'name' => 'Reparacion de PC escritorio Nivel I',
        		'price' => 50000
        	]);

        factory('App\Models\Maintenance')->create([
        		'name' => 'Reparacion de PC escritorio Nivel II',
        		'price' => 100000
        	]);

        factory('App\Models\Maintenance')->create([
        		'name' => 'Reparacion de PC escritorio Nivel III',
        		'price' => 150000
        	]);

        factory('App\Models\Maintenance')->create([
        		'name' => 'Limpieza de PC escritorio',
        		'price' => 60000
        	]);

        factory('App\Models\Maintenance')->create([
        		'name' => 'Limpieza de Laptop',
        		'price' => 100000
        	]);

        factory('App\Models\Maintenance')->create([
        		'name' => 'Reparacion Smartphone Nivel I',
        		'price' => 80000
        	]);

        factory('App\Models\Maintenance')->create([
        		'name' => 'Reparacion Smartphone Nivel II',
        		'price' => 120000
        	]);

        factory('App\Models\Maintenance')->create([
        		'name' => 'Reparacion Smartphone Nivel III',
        		'price' => 200000
        	]);

        factory('App\Models\Maintenance')->create([
        		'name' => 'Formateo computador',
        		'price' => 70000
        	]);

        factory('App\Models\Maintenance')->create([
        		'name' => 'Formateo Smartphone',
        		'price' => 80000
        	]);

        factory('App\Models\Maintenance')->create([
        		'name' => 'limpieza de impresora',
        		'price' => 130000
        	]);

        factory('App\Models\Maintenance')->create([
        		'name' => 'Reparacion de impresora',
        		'price' => 200000
        	]);
    }
}
