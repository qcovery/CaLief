<?php
namespace CaLief\Module\Configuration;

$config = array(
    'controllers' => [
        'factories' => [
            'CaLief\Controller\CaLiefController' => 'CaLief\Controller\AbstractBaseWithConfigFactory',
        ],
        'aliases' => [
            'calief' => 'CaLief\Controller\CaLiefController',
            'Calief' => 'CaLief\Controller\CaLiefController',
            'CaLief' => 'CaLief\Controller\CaLiefController',
        ],
    ],
    'view_helpers' => array(
        'invokables' => array(
            //'calief' => 'CaLief\CaLief\CaLiefHelper',
        )
    ),
    'service_manager' => [
        'allow_override' => true,
        'factories' => [
            'Delivery\Db\Row\CaliefAdmin' => 'VuFind\Db\Row\RowGatewayFactory',
            'Delivery\Db\Row\UserCalief' => 'VuFind\Db\Row\RowGatewayFactory',
            'Delivery\Db\Row\UserCaliefLog' => 'VuFind\Db\Row\RowGatewayFactory',
            'Delivery\Db\Table\CaliefAdmin' => 'VuFind\Db\Table\GatewayFactory',
            'Delivery\Db\Table\UserCalief' => 'VuFind\Db\Table\GatewayFactory',
            'Delivery\Db\Table\UserCaliefLog' => 'VuFind\Db\Table\GatewayFactory',
        ],
        'aliases' => [
        ],
    ],
    'db_row' => [
        'service_manager' => [
            'aliases' => [
                'caliefadmin' => 'CaLief\Db\Row\CaliefAdmin',
                'usercalief' => 'CaLief\Db\Row\UserCalief',
                'usercalieflog' => 'CaLief\Db\Row\UserCaliefLog',
            ]
        ]
    ],
    'db_table' => [
        'service_manager' => [
            'aliases' => [
                'caliefadmin' => 'CaLief\Db\Table\CaliefAdmin',
                'usercalief' => 'CaLief\Db\Table\UserCalief',
                'usercalieflog' => 'CaLief\Db\Table\UserCaliefLog',
            ]
        ]
    ],
);

// Define static routes -- Controller/Action strings
$staticRoutes = [
    'CaLief/Index'
];

$routeGenerator = new \VuFind\Route\RouteGenerator();
$routeGenerator->addStaticRoutes($config, $staticRoutes);

return $config;
