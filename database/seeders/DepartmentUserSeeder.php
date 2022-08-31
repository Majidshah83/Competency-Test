<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DepartmentUser;
class UserDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DepartmentUser::factory()->count(5)->create();
    }
}
