<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin1=new Admin;
        $admin1->name="Utkarsh";
        $admin1->email="Utkarsh@123";
        $admin1->password="123456789";
        $admin1->gender="M";
        $admin1->dob=now();
        $admin1->status=1;
        $admin1->save();
        
        $admin2=new Admin;
        $admin2->name="Sonali";
        $admin2->email="sonali@123";
        $admin2->gender="F";
        $admin2->dob=now();
        $admin2->status=1;
        $admin2->password="987456321";
        $admin2->save();
    }
}
