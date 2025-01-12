<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SocieteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();

        // Nombre de sociétés à créer
        $nombreSocietes = 10;
        for ($i = 0; $i < $nombreSocietes; $i++) {
            DB::table('societes')->insert([
                'nom' => $faker->company,
                'adresse' => $faker->address,
                'telephone' => $faker->phoneNumber,
                'email' => $faker->companyEmail,
                'site_web' => $faker->url,
                'numero_siret' => $faker->unique()->numerify('###########'),
                'numero_tva' => $faker->optional()->numerify('FR##'),
                'statut_juridique' => $faker->word,
                'annee_creation' => $faker->year,
                'historique' => $faker->text,
                'mission' => $faker->text,
                'vision' => $faker->text,
                'valeurs' => $faker->text,
                'dirigeant' => $faker->name,
                'effectif' => $faker->numberBetween(1, 500),
                'services' => $faker->words(3, true),
                'secteurs' => $faker->words(2, true),
                'specialites' => $faker->words(2, true),
                'projets_emblematiques' => $faker->text,
                'clients_principaux' => $faker->text,
                'certifications' => $faker->words(3, true),
                'affiliations' => $faker->words(3, true),
                'responsabilite_sociale' => $faker->text,
                'innovation' => $faker->text,
                'logo' => $faker->imageUrl(200, 200, 'business', true, 'Logo', true), // URL fictive pour le logo
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
