<?php

namespace App\Services;

class MyWork
{
    public function getAllWork()
    {
        return array(
            array(
                'title' => 'Epic project',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
                'imagePath' => 'assets/images/project.png'
            ),
            array(
                'title' => 'Another work I did',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
                'imagePath' => 'assets/images/another_work.png'
            ),
            array(
                'title' => 'Rebrand of this company',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
                'imagePath' => 'assets/images/rebrand.png'
            )
        );
    }
}
