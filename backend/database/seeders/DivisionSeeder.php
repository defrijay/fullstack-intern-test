<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    public function run()
    {
        $divisions = ['Mobile Apps', 'QA', 'Full Stack', 'Backend', 'Frontend', 'UI/UX Designer'];

        foreach ($divisions as $division) {
            \App\Models\Division::create([
                'id' => Str::uuid(),
                'name' => $division,
            ]);
        }
    }

}
