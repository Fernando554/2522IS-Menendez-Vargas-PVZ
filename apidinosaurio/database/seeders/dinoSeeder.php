<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\seeder;
use Illuminate\Support\Facades\DB;

class dinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cliente1 = new \GuzzleHttp\Client();
        $response = $cliente1->request('GET', 'https://agile-wave-15412.herokuapp.com/api/dinosaur/');
        $Dinosaurios = json_decode($response->getBody()->getContents(), true);

        for($i=0; $i<10; $i++)
        {
            DB::table('Dinosaurios')->insert([
                'Nombre' => $Dinosaurios[$i]['name'],
                'Descripcion' => $Dinosaurios[$i]['description'],
                'Altura' => $Dinosaurios[$i]['height'],
                'Peso' => $Dinosaurios[$i]['weight'],
                'Imagen' => $Dinosaurios[$i]['image'],
                'Region' => $Dinosaurios[$i]['region'],
                'Area_Geologica' => $Dinosaurios[$i]['geological_era'],
                'owner' => $Dinosaurios[$i]['owner'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
    }
}
