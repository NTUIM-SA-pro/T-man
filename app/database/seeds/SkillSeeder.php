<?php
 
class SkillSeeder extends DatabaseSeeder
{
    public function run()
    {
        $skills = [
            [
                'name' => '電腦',
                'description' => '',
                'cata_id' => 1
            ],
            [
                'name' => '語文',
                'description' => '',
                'cata_id' => 1
            ],
            [
                'name' => '運動',
                'description' => '',
                'cata_id' => 1
            ]
        ];
  
        foreach ($categories as $category) {
            Category::create($categor);
        }
    }
}