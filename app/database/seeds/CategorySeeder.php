<?php
 
class CategorySeeder extends DatabaseSeeder
{
    public function run()
    {
        $categories = [
            [
                'name' => 'Web Design',
                'description' => 'Design webpage, including back-end and fornt-end.'
            ],
            [
                'name' => 'Others',
                'description' => 'Others.'
            ]
        ];
  
        foreach ($categories as $category) {
            Category::create($categor);
        }
    }
}