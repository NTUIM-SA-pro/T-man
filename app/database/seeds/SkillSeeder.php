<?php
 
class SkillSeeder extends DatabaseSeeder
{
    public function run()
    {
        $skills = [
            [
                'sname' => '電腦',
                'skill_description' => ''
            ],
            [
                'sname' => '語文',
                'skill_description' => ''
            ],
            [
                'sname' => '運動',
                'skill_description' => ''
            ],
            [
                'sname' => '美術',
                'skill_description' => ''
            ],
            [
                'sname' => '行政',
                'skill_description' => ''
            ],
            [
                'sname' => '其他',
                'skill_description' => ''
            ],
        ];
  
        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}