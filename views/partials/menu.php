<?php
echo 'menu.php</br>';
$path = 'path';
$menuElements = 
[
    [
    'href' => $path,
    'menuTitle' => 'Users from file',
    'extra' => [ 'target' => '_blank'],
    'childs' => [
        [
        'href' => $path.'start.php?U=users&A=listalluser',
        'menuTitle' => 'List all User',
        'extra' => [ 'target' => '_blank']
        ],
        [
        'href' => $path.'start.php?U=users&A=addnewuser',
        'menuTitle' => 'Add User',
        'extra' => [ 'target' => '_blank']
        ],
        [
        'href' => $path.'start.php?U=users&A=deleteuser',
        'menuTitle' => 'Delete User',
        'extra' => [ 'target' => '_blank']
        ],
        [
        'href' => $path.'start.php?U=users&A=modifyuser',
        'menuTitle' => 'Modify User',
        'extra' => [ 'target' => '_blank']
        ]
    ]
    ],
    [
        'href' => $path, 
        'menuTitle' => 'Users from DB',
        'extra' => [ 'target' => '_blank'],
        'childs' => [
            [
            'href' => $path.'start.php?U=usersdatabase&A=alluserdb',
            'menuTitle' => 'List all User',
            'extra' => [ 'target' => '_blank']
            ],
            [
                'href' => $path.'start.php?U=usersdatabase&A=oneuserdb',
                'menuTitle' => 'Show one User',
                'extra' => [ 'target' => '_blank']
            ],
            [
            'href' => $path.'start.php?U=usersdatabase&A=adduserdb',
            'menuTitle' => 'Add User',
            'extra' => [ 'target' => '_blank']
            ],
            [
            'href' => $path.'start.php?U=usersdatabase&A=deleteuserdb',
            'menuTitle' => 'Delete User',
            'extra' => [ 'target' => '_blank']
            ],
            [
            'href' => $path.'start.php?U=usersdatabase&A=modifyuserdb',
            'menuTitle' => 'Modify User',
            'extra' => [ 'target' => '_blank']
            ]
        ]
        ],
    [
        'href' => '#', 
        'menuTitle' => 'Picture Gallery',
        'extra' => ['target' => '_blank'],
        'childs' => [[
        'href' => 'protected/views/content.php',
        'menuTitle' => 'Upload Picture'],
        [
        'href' => '#',
        'menuTitle' => 'Delete Picture'],
        [
        'href' => '#',
        'menuTitle' => 'Modify Picture'
            ]
            ]
    ],
    [
        'href' => $path.'start.php?U=fileupload',
        'menuTitle' => 'Fileupload'
    ],
    [
        'href' => $path.'login.php?U=login',
        'menuTitle' => 'Login'
    ] 

    ];

$menuCnt = count($menuElements);

echo $menuCnt;
