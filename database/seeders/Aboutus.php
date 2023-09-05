<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Aboutus extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('About')->insert(
            [
                'choose_us' => 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Corporis ducimus, sunt ipsam alias culpa quod repellat beatae sit, asperiores blanditiis repellendus quidem maiores ad numquam error sequi! Similique quaerat architecto quidem doloremque, est nihil repellendus repudiandae dolores aut enim hic sed rerum aspernatur laudantium in illo dolorem cumque facere. Provident.',
                'choose_us_image' => 'bird1.jpg',
                'mission' => 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Corporis ducimus, sunt ipsam alias culpa quod repellat beatae sit, asperiores blanditiis repellendus quidem maiores ad numquam error sequi! Similique quaerat architecto quidem doloremque, est nihil repellendus repudiandae dolores aut enim hic sed rerum aspernatur laudantium in illo dolorem cumque facere. Provident.',
                'mission_image' => 'bird2.jpg',
                'vision' => 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Corporis ducimus, sunt ipsam alias culpa quod repellat beatae sit, asperiores blanditiis repellendus quidem maiores ad numquam error sequi! Similique quaerat architecto quidem doloremque, est nihil repellendus repudiandae dolores aut enim hic sed rerum aspernatur laudantium in illo dolorem cumque facere. Provident.',
                'vision_image' => 'bird3.jpg',
                'project_completed' => '150',
                'ongogin_project' => '11',
                'employe' => '30',
                'experiance' => '7'
            ]
        );
    }
}
