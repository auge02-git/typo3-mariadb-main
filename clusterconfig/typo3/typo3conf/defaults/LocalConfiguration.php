<?php
return [
    'BE' => [
        'explicitADmode' => 'explicitAllow',
        'loginSecurityLevel' => 'rsa',
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8',
                'driver' => 'mysqli',
                'host' => 'mysqldb',
                'password' => 'test1234',
                'port' => 3306,
                'user' => 'test',
            ],
        ],
    ],
    'EXT' => [
        'extConf' => [
            'rsaauth' => 'a:1:{s:18:"temporaryDirectory";s:0:"";}',
            'rte_ckeditor' => 'a:1:{s:15:"ckeditorVersion";s:6:"latest";}',
            'saltedpasswords' => 'a:2:{s:3:"BE.";a:4:{s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\Pbkdf2Salt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}s:3:"FE.";a:5:{s:7:"enabled";i:1;s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\Pbkdf2Salt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}}',
        ],
    ],
    'FE' => [
        'enableRecordRegistration' => false,
        'loginSecurityLevel' => 'rsa',
    ],
    'GFX' => [
        'jpg_quality' => '80',
    ],
    'SYS' => [
        'encryptionKey' => '81d8d0fa09504cb2a2a86cbb0db3db67ebb1575e6240d7ed6588c15eb2088d680edf6e2dced90ce0f856ca1e1a4ae90d',
        'isInitialDatabaseImportDone' => false,
        'isInitialInstallationInProgress' => true,
        'sitename' => 'New TYPO3 site',
    ],
];
