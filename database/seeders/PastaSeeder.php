<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pasta;

class PastaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array_pasta = config("pasta");

        foreach ($array_pasta as $pasta_item) {
            $nuova_pasta = new Pasta();
            $nuova_pasta->title = $pasta_item["titolo"];
            $nuova_pasta->description = $pasta_item["descrizione"];
            $nuova_pasta->type = $pasta_item["tipo"];
            $nuova_pasta->image = $pasta_item["src"];
            $nuova_pasta->cooking_time = $pasta_item["cottura"];
            $nuova_pasta->weight = $pasta_item["peso"];
            $nuova_pasta->save();
        }
    }
}
