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
            ],
            [
                'name' => '美術',
                'description' => '',
                'cata_id' => 2
            ],
            [
                'name' => '行政',
                'description' => '',
                'cata_id' => 2
            ],
            [
                'name' => '其他',
                'description' => '',
                'cata_id' => 2
            ],
        ];
  
        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}