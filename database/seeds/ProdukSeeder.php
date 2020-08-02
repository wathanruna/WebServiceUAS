<?php

use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produks')->insert([
        		'name' => "basket",
        		'gambar' => "https://akcdn.detik.net.id/community/media/visual/2019/11/15/df8d50eb-0422-4f45-9395-43be3ed3a165_169.jpeg?w=700&q=90",
        		'deskripsi' => "basket ada laha olaharaga yg menlatih tangan bahu siku dan kaki dan kini basket merupakan olahraga yg palinga banyak dimainkan di dunia",
        		'tempat' => "Gor Turide",
        		'jadwal' => "17 agustus 2020"


        	]);
          DB::table('produks')->insert([
        		'name' => "bola",
        		'gambar' => "https://akcdn.detik.net.id/community/media/visual/2019/11/15/df8d50eb-0422-4f45-9395-43be3ed3a165_169.jpeg?w=700&q=90",
        		'deskripsi' => "bola ada laha olaharaga yg menlatih tangan bahu siku dan kaki dan kini basket merupakan olahraga yg palinga banyak dimainkan di dunia",
        		'tempat' => "KONI",
        		'jadwal' => "17 agustus 2020"


        	]);

            DB::table('produks')->insert([
        		'name' => "lari",
        		'gambar' => "https://akcdn.detik.net.id/community/media/visual/2019/11/15/df8d50eb-0422-4f45-9395-43be3ed3a165_169.jpeg?w=700&q=90",
        		'deskripsi' => "lari ada laha olaharaga yg menlatih tangan bahu siku dan kaki dan kini basket merupakan olahraga yg palinga banyak dimainkan di dunia",
        		'tempat' => "Lombok timur gelanggang",
        		'jadwal' => "17 agustus 2020"


        	]);
    }
}
