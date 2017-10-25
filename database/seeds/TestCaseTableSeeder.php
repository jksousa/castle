<?php

use Illuminate\Database\Seeder;

class TestCaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $testCase=new \App\TestCase([
            'location'=>'Atlanta',
            'engineer'=>'Tom Hagerty',
            'speed'=>60.3,
            'errors'=>15

        ]);
        $testCase->save();

        $testCase=new \App\TestCase([
            'location'=>'Seattle',
            'engineer'=>'Richard Feynman',
            'speed'=>15.7,
            'errors'=>5

        ]);
        $testCase->save();
    }
}
