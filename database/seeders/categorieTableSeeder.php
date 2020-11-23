<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categorie;
class categorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorie=new Categorie();
        $categorie->nom='televiseur';
        $categorie->src='tv1';
        $categorie->save();
        $categorie=new Categorie();
        $categorie->nom='ordinateur';
        $categorie->src='tv2';
        $categorie->save();
        $categorie=new Categorie();
        $categorie->nom='mobile';
        $categorie->src='tv3';
        $categorie->save();
    }
}
