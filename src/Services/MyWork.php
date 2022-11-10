<?php

namespace App\Services;

class MyWork
{
    public function getAllWork()
    {
        return array(
            array(
                'title' => 'Epic project',
                'description' => 'There is no theory of evolution. Just a list of animals Chuck Norris allows to live',
                'imagePath' => 'assets/images/project.png'
            ),
            array(
                'title' => 'Another work I did',
                'description' => "What was going through the minds of all of Chuck Norris' victims before they died? His shoe.",
                'imagePath' => 'assets/images/another_work.png'
            ),
            array(
                'title' => 'Rebrand of this company',
                'description' => 'Chuck Norris can win a game of Connect Four in only three moves',
                'imagePath' => 'assets/images/rebrand.png'
            )
        );
    }
}
