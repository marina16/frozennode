<?php

return [

    'title' => 'Books',
    'single'=>'book',
    'model'=>'App\Book',
    'columns'=>[

        'name',
        'cover'=>[
            'output' => '<img src="/uploads/books/covers/(:value)"/>',
        ],
        'author_id',
    ],
    'edit_fields'=>[
        'name'=>[
            'type'=>'text',
        ],
        'authors' => [
            'type'=>'relationship',
            'name_field'=>'id',
        ],
        'cover' => [
            'type'=>'image',
            'location'=> public_path().'/uploads/books/covers/',
            'sizes'=> [
                [100,100,'auto',public_path().'/uploads/books/covers/',100],
            ]

        ],

    ],
];