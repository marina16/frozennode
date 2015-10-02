<?php

return [

    'title' => 'Authors',
    'single'=>'author',
    'model'=>'App\Author',
    'columns'=>[
        'id',
        'name',


    ],
    'edit_fields'=>[
        'name' => [
            'type'=>'text'
        ],
        'books' => [
            'type'=>'relationship',
            'name_field'=>'name',
        ],
    ],
];