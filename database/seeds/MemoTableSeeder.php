<?php

use Illuminate\Database\Seeder;

use App\Memo;

class MemoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('memo')->delete();

        Memo::create([
          'title' => '04/26 laravel','content' => 'Insert connecting Data.'
        ]);

        Memo::create([
          'title' => '04/04 Laravel','content' => ' Doing View.'
        ]);
    }
}
