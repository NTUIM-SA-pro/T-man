<?php
 
class SkillSeeder extends DatabaseSeeder
{
    public function run()
    {
        $skills = [
            [
                'sname' => '電腦',
                'skills_description' => ''
            ],
            [
                'sname' => '語文',
                'skills_description' => ''
            ],
            [
                'sname' => '運動',
                'skills_description' => ''
            ],
            [
                'sname' => '美術',
                'skills_description' => ''
            ],
            [
                'sname' => '行政',
                'skills_description' => ''
            ],
            [
                'sname' => '其他',
                'skills_description' => ''
            ],
        ];
  
        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}