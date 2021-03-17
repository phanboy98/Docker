<?php
return [
    'backend' => [
        'frontName' => 'admin_1326mc'
    ],
    'crypt' => [
        'key' => 'f31070f70654ebf7986777c0e29f74af'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'db',
                'dbname' => 'magento',
                'username' => 'magento',
                'password' => 'magento',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'session' => [
        'save' => 'files',
        'redis' => [
            'host' => 'redis',
            'port' => '6379',
            'password' => '',
            'timeout' => '2.5',
            'persistent_identifier' => '',
            'database' => '2',
            'compression_threshold' => '2048',
            'compression_library' => 'gzip',
            'log_level' => '4',
            'max_concurrency' => '6',
            'break_after_frontend' => '5',
            'break_after_adminhtml' => '30',
            'first_lifetime' => '600',
            'bot_first_lifetime' => '60',
            'bot_lifetime' => '7200',
            'disable_locking' => '0',
            'min_lifetime' => '60',
            'max_lifetime' => '2592000',
            'sentinel_master' => '',
            'sentinel_servers' => '',
            'sentinel_connect_retries' => '5',
            'sentinel_verify_master' => '0'
        ]
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => '69d_',
                'backend' => 'Magento\\Framework\\Cache\\Backend\\Redis',
                'backend_options' => [
                    'server' => 'redis',
                    'database' => '0',
                    'port' => '6379',
                    'password' => '',
                    'compress_data' => '1',
                    'compression_lib' => ''
                ]
            ],
            'page_cache' => [
                'id_prefix' => '69d_',
                'backend' => 'Magento\\Framework\\Cache\\Backend\\Redis',
                'backend_options' => [
                    'server' => 'redis',
                    'database' => '1',
                    'port' => '6379',
                    'password' => '',
                    'compress_data' => '0',
                    'compression_lib' => ''
                ]
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => null
        ]
    ],
    'directories' => [
        'document_root_is_pub' => false
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 0,
        'config_webservice' => 1,
        'translate' => 1,
        'vertex' => 1
    ],
    'downloadable_domains' => [
        'milwaukee.localhost'
    ],
    'install' => [
        'date' => 'Fri, 20 Nov 2020 11:43:59 +0000'
    ],
    'system' => [
        'default' => [
            'admin' => [
                'url' => [
                    'custom' => null
                ]
            ],
            'dev' => [
                'js' => [
                    'session_storage_key' => 'collected_errors'
                ],
                'restrict' => [
                    'allow_ips' => null
                ]
            ],
            'system' => [
                'smtp' => [
                    'host' => 'localhost',
                    'port' => '25'
                ],
                'full_page_cache' => [
                    'varnish' => [
                        'access_list' => 'localhost',
                        'backend_host' => 'localhost',
                        'backend_port' => '8080'
                    ]
                ]
            ],
            'web' => [
                'unsecure' => [
                    'base_url' => 'https://milwaukee.localhost/',
                    'base_link_url' => '{{unsecure_base_url}}'
                ],
                'secure' => [
                    'base_url' => 'https://milwaukee.localhost/',
                    'base_link_url' => '{{secure_base_url}}'
                ],
                'default' => [
                    'front' => 'cms'
                ]
            ],
            'adobe_ims' => [
                'integration' => [
                    'api_key' => null,
                    'private_key' => null
                ]
            ],
            'currency' => [
                'import' => [
                    'error_email' => null
                ]
            ],
            'catalog' => [
                'search' => [
                    'elasticsearch5_server_hostname' => 'localhost',
                    'elasticsearch5_server_port' => '9200',
                    'elasticsearch5_index_prefix' => 'magento2',
                    'elasticsearch5_enable_auth' => '0',
                    'elasticsearch5_server_timeout' => '15',
                    'elasticsearch6_server_hostname' => 'localhost',
                    'elasticsearch6_server_port' => '9200',
                    'elasticsearch6_index_prefix' => 'magento2',
                    'elasticsearch6_enable_auth' => '0',
                    'elasticsearch6_server_timeout' => '15',
                    'elasticsearch7_server_hostname' => 'elasticsearch',
                    'elasticsearch7_server_port' => '9200',
                    'elasticsearch7_index_prefix' => 'magento2',
                    'elasticsearch7_enable_auth' => '0',
                    'elasticsearch7_server_timeout' => '15'
                ],
                'productalert_cron' => [
                    'error_email' => null
                ]
            ],
            'cataloginventory' => [
                'source_selection_distance_based_google' => [
                    'api_key' => null
                ]
            ],
            'payment' => [
                'checkmo' => [
                    'mailing_address' => null
                ],
                'paypal_express' => [
                    'debug' => '0'
                ],
                'paypal_express_bml' => [
                    'publisher_id' => null
                ],
                'payflow_express' => [
                    'debug' => '0'
                ],
                'payflowpro' => [
                    'user' => null,
                    'pwd' => null,
                    'partner' => null,
                    'sandbox_flag' => '0',
                    'debug' => '0'
                ],
                'paypal_billing_agreement' => [
                    'debug' => '0'
                ],
                'payflow_link' => [
                    'pwd' => null,
                    'url_method' => 'GET',
                    'sandbox_flag' => '0',
                    'use_proxy' => '0',
                    'debug' => '0'
                ],
                'payflow_advanced' => [
                    'user' => null,
                    'pwd' => null,
                    'url_method' => 'GET',
                    'sandbox_flag' => '0',
                    'debug' => '0'
                ],
                'hosted_pro' => [
                    'debug' => '0'
                ],
                'amazon_payment' => [
                    'merchant_id' => null,
                    'access_key' => null,
                    'secret_key' => null,
                    'client_id' => null,
                    'client_secret' => null,
                    'credentials_json' => null,
                    'sandbox' => '0'
                ],
                'braintree' => [
                    'public_key' => null,
                    'private_key' => null,
                    'merchant_account_id' => null
                ],
                'braintree_paypal' => [
                    'merchant_name_override' => null
                ],
                'amazon_payments' => [
                    'simplepath' => [
                        'publickey' => '-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA5/BncZi4PW8jNdZmiUbN
eq/S31A56RRocDcZGzGew1Td8kDtTlFEjCqvCqpgcYyMFPXMXa1x8ZOI9rRTDzRs
lDy8I/Nh9OOrieGTlu53enHhRKyw2RhCaITxiCm7ZSAvQapRl4fIs91iFzkEYXpr
sQpV41r4eQha0N8n1w5neuE9bgCo2ENPeHcusZGm9mV4Gt/wAcTt6zdBLOZN44CW
Ed/maxXl7uPB402upeZTX0mRPjrh8D8DUdXBmajsdNlcMUwNODVFq1tvMmrAidQo
bC7CURETKQm69hEQxML2mT3PL6aXMyVafeR9drJ6wbUh1lEJWfb1syh4OXY3h6xr
bQIDAQAB
-----END PUBLIC KEY-----',
                        'privatekey' => '0:3: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'
                    ]
                ]
            ],
            'contact' => [
                'email' => [
                    'recipient_email' => 'hello@example.com'
                ]
            ],
            'carriers' => [
                'dhl' => [
                    'account' => null,
                    'gateway_url' => 'https://xmlpi-ea.dhl.com/XMLShippingServlet',
                    'id' => null,
                    'password' => null,
                    'debug' => '0'
                ],
                'fedex' => [
                    'account' => null,
                    'meter_number' => null,
                    'key' => null,
                    'password' => null,
                    'sandbox_mode' => '0',
                    'production_webservices_url' => 'https://ws.fedex.com:443/web-services/',
                    'sandbox_webservices_url' => 'https://wsbeta.fedex.com:443/web-services/',
                    'smartpost_hubid' => null
                ],
                'ups' => [
                    'access_license_number' => null,
                    'gateway_url' => 'https://www.ups.com/using/services/rave/qcostcgi.cgi',
                    'gateway_xml_url' => 'https://onlinetools.ups.com/ups.app/xml/Rate',
                    'tracking_xml_url' => 'https://onlinetools.ups.com/ups.app/xml/Track',
                    'username' => null,
                    'password' => null,
                    'is_account_live' => '0',
                    'shipper_number' => null,
                    'debug' => '0'
                ],
                'usps' => [
                    'gateway_url' => 'http://production.shippingapis.com/ShippingAPI.dll',
                    'gateway_secure_url' => 'https://secure.shippingapis.com/ShippingAPI.dll',
                    'userid' => null,
                    'password' => null
                ]
            ],
            'trans_email' => [
                'ident_custom1' => [
                    'email' => 'info@dtn.com.vn',
                    'name' => 'Custom 1'
                ],
                'ident_custom2' => [
                    'email' => 'info@dtn.com.vn',
                    'name' => 'Custom 2'
                ],
                'ident_general' => [
                    'email' => 'info@dtn.com.vn',
                    'name' => 'Owner'
                ],
                'ident_sales' => [
                    'email' => 'info@dtn.com.vn',
                    'name' => 'Sales'
                ],
                'ident_support' => [
                    'email' => 'info@dtn.com.vn',
                    'name' => 'CustomerSupport'
                ]
            ],
            'analytics' => [
                'url' => [
                    'signup' => 'https://advancedreporting.rjmetrics.com/signup',
                    'update' => 'https://advancedreporting.rjmetrics.com/update',
                    'bi_essentials' => 'https://dashboard.rjmetrics.com/v2/magento/signup',
                    'otp' => 'https://advancedreporting.rjmetrics.com/otp',
                    'report' => 'https://advancedreporting.rjmetrics.com/report',
                    'notify_data_changed' => 'https://advancedreporting.rjmetrics.com/report'
                ],
                'general' => [
                    'token' => 'qUquEoWaL78r2SQMttL7KO4KjCUANgreokiPl1Pg_d7Kr1hW8KzcYqup05Us-TpwsTLvVKZhtim2gPO9hSpB0g'
                ]
            ],
            'newrelicreporting' => [
                'general' => [
                    'api_url' => 'https://api.newrelic.com/deployments.xml',
                    'insights_api_url' => 'https://insights-collector.newrelic.com/v1/accounts/%s/events'
                ]
            ],
            'paypal' => [
                'wpp' => [
                    'api_password' => null,
                    'api_signature' => null,
                    'api_username' => null,
                    'sandbox_flag' => '0'
                ],
                'fetch_reports' => [
                    'ftp_login' => null,
                    'ftp_password' => null,
                    'ftp_sandbox' => '0',
                    'ftp_ip' => null,
                    'ftp_path' => null
                ],
                'general' => [
                    'merchant_country' => 'JP',
                    'business_account' => null
                ]
            ],
            'recaptcha_backend' => [
                'type_recaptcha' => [
                    'public_key' => null,
                    'private_key' => null
                ],
                'type_invisible' => [
                    'public_key' => null,
                    'private_key' => null
                ],
                'type_recaptcha_v3' => [
                    'public_key' => null,
                    'private_key' => null
                ]
            ],
            'sitemap' => [
                'generate' => [
                    'error_email' => null
                ]
            ],
            'crontab' => [
                'default' => [
                    'jobs' => [
                        'analytics_collect_data' => [
                            'schedule' => [
                                'cron_expr' => '00 02 * * *'
                            ]
                        ]
                    ]
                ]
            ],
            'klarna' => [
                'api' => [
                    'merchant_id' => null,
                    'shared_secret' => null,
                    'test_mode' => '1',
                    'debug' => '1'
                ]
            ],
            'smile_elasticsuite_core_base_settings' => [
                'es_client' => [
                    'servers' => 'elasticsearch:9200'
                ]
            ]
        ]
    ]
];
