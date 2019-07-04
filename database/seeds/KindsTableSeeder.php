<?php

use App\Kind;
use Illuminate\Database\Seeder;

class KindsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kind=new Kind();
        $kind->nameKind='Horror';
        $kind->save();

        $kind=new Kind();
        $kind->nameKind='Fiction';
        $kind->save();

        $kind=new Kind();
        $kind->nameKind='Action';
        $kind->save();

        $kind=new Kind();
        $kind->nameKind='Fantasy';
        $kind->save();

        $kind=new Kind();
        $kind->nameKind='Romance';
        $kind->save();

        $kind=new Kind();
        $kind->nameKind='Adventure';
        $kind->save();

        $kind=new Kind();
        $kind->nameKind='Drama';
        $kind->save();

        $kind=new Kind();
        $kind->nameKind='Supernatural';
        $kind->save();
    }
}
