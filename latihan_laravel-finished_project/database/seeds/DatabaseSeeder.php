<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('products')->insert([
            [
                'name' => 'teh botol sosor',
                'category' => 'Makanan',
                'qty' => 100,
                'price' => 1000,
            ],
            [
                'name' => 'indiamie goreng',
                'category' => 'Makanan',
                'qty' => 20,
                'price' => 5000,
            ],
            [
                'name' => 'u c 2000',
                'category' => 'Minuman',
                'qty' => 20,
                'price' => 3000,
            ],
            [
                'name' => 'pepesi',
                'category' => 'Makanan',
                'qty' => 20,
                'price' => 5000,
            ],

        ]);
        for ($i=0;$i<3;$i++){
            DB::table('transactions')->insert([
                'idStaff' => '1',
                'date' => '2020-11-26 00:00:00',
            ]);
            for ($j=0;$j<4;$j++){
                if(rand(0,1) == 1){
                    DB::table('detail_transactions')->insert([
                        'idTransaction' => ($i+1),
                        'idProduct' => ($j+1),
                        'qty' => rand(1,10)
                    ]);
                }
            }

        }

    }
}
