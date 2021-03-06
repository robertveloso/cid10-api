<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class cid10TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cids = json_decode(file_get_contents(__DIR__ . '/cid10.json'));

        foreach ($cids as $cid){
            DB::table('cid10')->insert([
                'nome' =>$cid->nome,
                'codigo' => $cid->codigo
            ]);
        }
    }
}
