<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [  
        'administrator' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u,d',
            'consult' =>'c,u,r,d',
            'articles' =>'c,r,u,d'
        ],
        'user' => [
            'profile' => 'c,r,u,d',
            'consult' => 'c,r,u,d',
            'articles' => 'r'
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
