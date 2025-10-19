<?php

namespace App\Models;


class Job
{
    public static function all() {
        return[
            [
                'title' => 'Software Engineer',
                'company' => 'Tech Solutions',
                'salary' => ' $800 - $1000',
            ],
            [
                'title' => 'Data Analyst',
                'company' => 'Data Insights',
                'salary' => ' $1000 - $1200',
            ]
        ];
    }    
}
