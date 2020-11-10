<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Commerce;
class CommerceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $commerce=new Commerce();
        $commerce->nom='televiseur';
        $commerce->src='Skander';
        $commerce->prix=1000;
        $commerce->marque='Samsung';
        $commerce->quantite=10;
        $commerce->description='dfkkfkkhlfdmldd re(y-(u -uk_kommpù joàp)^^^$$$$$$';
        $commerce->save();
        $commerce=new Commerce();
        $commerce->nom='shampoing';
        $commerce->src='sans alcool';
        $commerce->prix=10;
        $commerce->marque='colorado';
        $commerce->quantite=30;
        $commerce->description='dfkkfkkhlfdmldd';
        $commerce->save();
           
    }
}
