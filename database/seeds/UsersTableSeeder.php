<?php

    use App\User;
    use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Bunny'
        ]);

        User::create([
            'name' => 'Joker'
        ]);

        User::create([
            'name' => 'Mohammed'
        ]);

        User::create([
            'name' => 'Jackson Five'
        ]);
    }
}
