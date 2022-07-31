<?php
$_ENV['config_migrate_notice'] =
    '新增 enable_change_email 配置項
新增 smtp_bbc 配置項
';
$_ENV['version'] = 2;
$_ENV['key']        = '1145148104934';
$_ENV['debug']      = true; 
$_ENV['appName']    = 'ANGO';
$_ENV['baseUrl']    = 'https:
$_ENV['muKey']      = 'koibvgfx~gj47'; 
$_ENV['enableAdminApi'] = false; 
$_ENV['adminApiToken']  = 'ChangeMeToSafeKey'; 
$_ENV['db_driver']    = 'mysql';
$_ENV['db_host']      = 'sql3.freemysqlhosting.net';
$_ENV['db_socket']    = '';
$_ENV['db_database']  = 'sql3508671';  
$_ENV['db_username']  = 'sql3508671';   
$_ENV['db_password']  = 'vvpH9TzUNi';  
$_ENV['db_charset']   = 'utf8mb4';
$_ENV['db_collation'] = 'utf8mb4_unicode_ci';
$_ENV['db_prefix']    = '';
$_ENV['streaming_media_unlock_multiplexing'] = [


];
$_ENV['sendPageLimit']      = 50;    
$_ENV['email_queue']        = true;       
$_ENV['mail_filter']        = 0;         
$_ENV['mail_filter_list']   = array("qq.com", "vip.qq.com", "foxmail.com");
$_ENV['auto_backup_email']  = '';  
$_ENV['auto_backup_password'] = '';    
$_ENV['backup_notify']      = false;   
$_ENV['free_user_reset_day']            = 0;    
$_ENV['free_user_reset_bandwidth']      = 0;      
$_ENV['random_group']              = '0';   
$_ENV['enable_reg_im']             = false;   
$_ENV['reg_forbidden_ip']          = '127.0.0.0/8,::1/128'; 
$_ENV['min_port']                  = 10000; 
$_ENV['max_port']                  = 65535; 
$_ENV['reg_forbidden_port']        = '';  
$_ENV['mu_suffix']                 = 'microsoft.com';           
$_ENV['mu_regex']                  = '%5m%id.%suffix';   
$_ENV['invite_price']              = -1;                    
$_ENV['custom_invite_price']       = -1;    
$_ENV['enable_checkin']             = true;    
$_ENV['checkinMin']                 = 1;       
$_ENV['checkinMax']                 = 50;    
$_ENV['auto_clean_uncheck_days']    = -1;        
$_ENV['auto_clean_unused_days']     = -1;   
$_ENV['auto_clean_min_money']       = 1;    
$_ENV['enable_bought_reset']        = true;  
$_ENV['enable_bought_extend']       = true;  
$_ENV['port_price']                 = -1;  
$_ENV['port_price_specify']         = -1;  
$_ENV['disconnect_time']        = 60;  
$_ENV['class_expire_reset_traffic'] = 0;
$_ENV['account_expire_delete_days'] = -1; 
$_ENV['enable_kill']                = true;  
$_ENV['enable_change_email']        = true;  
$_ENV['notify_limit_mode']          = true;  
$_ENV['notify_limit_value']         = 20;    
$_ENV['Subscribe']                  = false;   
$_ENV['subUrl']                     = $_ENV['baseUrl'] . '/link/';
$_ENV['mergeSub']                   = true;   
$_ENV['enable_sub_extend']          = true;   
$_ENV['enable_forced_replacement']  = true;  
$_ENV['sub_message']                = [];
$_ENV['disable_sub_mu_port']        = false;  
$_ENV['subscribeLog']               = false;    
$_ENV['subscribeLog_show']          = true;     
$_ENV['subscribeLog_keep_days']     = 7;       
$_ENV['mu_port_migration']          = false;      
$_ENV['add_emoji_to_node_name']     = false;              
$_ENV['add_appName_to_ss_uri']      = true;                       
$_ENV['subscribe_client']           = true;         
$_ENV['subscribe_client_url']       = '';              
$_ENV['Clash_DefaultProfiles']      = 'default';     
$_ENV['Surge_DefaultProfiles']      = 'default';     
$_ENV['Surge2_DefaultProfiles']     = 'default';           
$_ENV['Surfboard_DefaultProfiles']  = 'default';       
$_ENV['enable_auto_detect_ban']      = false;  
$_ENV['auto_detect_ban_numProcess']  = 300;
$_ENV['auto_detect_ban_allow_admin'] = true;  
$_ENV['auto_detect_ban_allow_users'] = [];      
$_ENV['auto_detect_ban_type']        = 1;
$_ENV['auto_detect_ban_number']      = 30;   
$_ENV['auto_detect_ban_time']        = 60;  
$_ENV['auto_detect_ban'] = [
    100 => [
        'type' => 'time',
        'time' => 120
    ],
    300 => [
        'type' => 'time',
        'time' => 720
    ],
    600 => [
        'type' => 'time',
        'time' => 4320
    ],
    1000 => [
        'type' => 'kill',
        'time' => 0
    ]
];
$_ENV['enable_telegram']                    = false;        
$_ENV['use_new_telegram_bot']               = true;         
$_ENV['telegram_token']                     = '';           
$_ENV['telegram_chatid']                    = '';           
$_ENV['telegram_bot']                       = '_bot';       
$_ENV['telegram_group_quiet']               = false;        
$_ENV['telegram_request_token']             = '';           
$_ENV['finance_public']                     = true;         
$_ENV['enable_welcome_message']             = true;         
$_ENV['allow_to_join_new_groups']           = true;         
$_ENV['group_id_allowed_to_join']           = [];           
$_ENV['telegram_admins']                    = [];           
$_ENV['enable_not_admin_reply']             = true;         
$_ENV['not_admin_reply_msg']                = '!';          
$_ENV['no_user_found']                      = '!';          
$_ENV['no_search_value_provided']           = '!';          
$_ENV['data_method_not_found']              = '!';          
$_ENV['delete_message_time']                = 180;          
$_ENV['delete_admin_message_time']          = 86400;        
$_ENV['enable_delete_user_cmd']             = false;        
$_ENV['help_any_command']                   = false;        
$_ENV['remark_user_search_email']           = ['邮箱'];                     
$_ENV['remark_user_search_port']            = ['端口'];                     
$_ENV['remark_user_option_is_admin']        = ['管理员'];                   
$_ENV['remark_user_option_enable']          = ['用户启用'];                  
$_ENV['remark_user_option_money']           = ['金钱', '余额'];             
$_ENV['remark_user_option_port']            = ['端口'];                     
$_ENV['remark_user_option_transfer_enable'] = ['流量'];                     
$_ENV['remark_user_option_passwd']          = ['连接密码'];                 
$_ENV['remark_user_option_method']          = ['加密'];                     
$_ENV['remark_user_option_protocol']        = ['协议'];                     
$_ENV['remark_user_option_protocol_param']  = ['协参', '协议参数'];         
$_ENV['remark_user_option_obfs']            = ['混淆'];                     
$_ENV['remark_user_option_obfs_param']      = ['混参', '混淆参数'];         
$_ENV['remark_user_option_invite_num']      = ['邀请数量'];                 
$_ENV['remark_user_option_node_group']      = ['用户组', '用户分组'];       
$_ENV['remark_user_option_class']           = ['等级'];                     
$_ENV['remark_user_option_class_expire']    = ['等级过期时间'];             
$_ENV['remark_user_option_expire_in']       = ['账号过期时间'];             
$_ENV['remark_user_option_node_speedlimit'] = ['限速'];                    
$_ENV['remark_user_option_node_connector']  = ['连接数', '客户端'];         
$_ENV['enable_user_email_group_show']       = false;                      
$_ENV['user_not_bind_reply']                = '您未绑定本站账号，您可以进入网站的 **资料编辑**，在右下方绑定您的账号.';                      
$_ENV['telegram_general_pricing']           = '产品介绍.';                  
$_ENV['telegram_general_terms']             = '服务条款.';                  
$_ENV['enable_telegram_login']              = false;   
$_ENV['enable_ticket']        = false;        
$_ENV['mail_ticket']          = false;        
$_ENV['useScFtqq']            = false;        
$_ENV['ScFtqq_SCKEY']         = '';           
$_ENV['sales_period']         = 30;             
$_ENV['enable_flag']          = true;            
$_ENV['flag_regex']           = '/.*?(?=\s)/';   
$_ENV['enable_donate']        = true;          
$_ENV['display_ios_class']    = -1;        
$_ENV['display_ios_topup']    = 0;         
$_ENV['ios_account']          = '';        
$_ENV['ios_password']         = '';        

#用户中心首页添加其他客户端的支持，可配合 subconverter 等 Api
$_ENV['userCenterClient']     = [
    'iOS'     => [
        [
            'name'           => 'Loon',
            'support'        => 'SS/SSR/VMess',
            'download_urls'  => [
                [
                    'name' => '本站下载',
                    'url'  => 'https:
                ],
                [
                    'name' => '官方下载',
                    'url'  => 'https:
                ]
            ],
            'tutorial_url'   => '/doc/#/iOS/Loon',
            'description'    => '其他说明.',
            'subscribe_urls' => [
                [
                    'name' => 'SS 订阅',
                    'type' => 'href',
                    'url'  => '%userUrl%?sub=2',
                ],
                [
                    'name' => 'SSR 订阅',
                    'type' => 'href',
                    'url'  => '%userUrl%?sub=1',
                ],
                [
                    'name' => 'V2Ray 订阅',
                    'type' => 'copy',
                    'url'  => '%userUrl%?sub=3',
                ]
            ]
        ]
    ]
    'macOS'   => [],
    'Linux'   => [],
    'Router'  => [],
    'Android' => [],
    'Windows' => [
        [
            'name'           => 'Netch',
            'support'        => 'SS/SSR/VMess',
            'download_urls'  => 
                [
                    'name' => '官方下载',
                    'url'  => 'https:
                ]
            ],
            'tutorial_url'   => '/doc/#/Windows/Netch',
            'description'    => '其他说明.',
            'subscribe_urls' => [
                
                    'name' => 'SS 订阅',
                    'type' => 'href',
                    'url'  => '%userUrl%?sub=2',
                ],
                [
                    'name' => 'SSR 订阅',
                    'type' => 'href',
                    'url'  => '%userUrl%?sub=1',
                ]
                [
                    'name' => 'V2Ray 订阅',
                    'type' => 'copy',
                    'url'  => '%userUrl%?sub=3',
                ]
            ]
        ]
    ]
]
$_ENV['detect_gfw_interval']             = 3600;    
$_ENV['detect_gfw_port']                 = 22;  
$_ENV['detect_gfw_url']                  = 'http:
$_ENV['detect_gfw_judge']                = function($json_tcping): bool {
    return $json_tcping['status'] === "true"
};
$_ENV['detect_gfw_count']                = '3';                                                                
$_ENV['enable_detect_offline']           = true;
$_ENV['enable_detect_offline_useScFtqq'] = false;
$_ENV['v2ray_port']     = 443;                  
$_ENV['v2ray_protocol'] = 'HTTP/2 + TLS';       
$_ENV['v2ray_alter_id'] = 32;
$_ENV['v2ray_level']    = 0;
$_ENV['WebAPI']     = true;
$_ENV['authDriver']             = 'cookie';            
$_ENV['pwdMethod']              = 'md5';               
$_ENV['salt']                   = '';                  
$_ENV['sessionDriver']          = 'cookie';            
$_ENV['cacheDriver']            = 'cookie';            
$_ENV['tokenDriver']            = 'db';                
$_ENV['enable_login_bind_ip']   = false;        
$_ENV['rememberMeDuration']     = 7;           
$_ENV['timeZone']               = 'PRC';                 
$_ENV['theme']                  = 'material';            
$_ENV['jump_delay']             = 1200;                  
$_ENV['checkNodeIp']            = false;                 
$_ENV['muKeyList']              = [];                   
$_ENV['keep_connect']           = false;               
$_ENV['money_from_admin']       = false;            
$_ENV['cloudflare_enable']      = false;         
$_ENV['cloudflare_email']       = '';            
$_ENV['cloudflare_key']         = '';            
$_ENV['cloudflare_name']        = '';            
$_ENV['enable_analytics_code']  = false;
$_ENV['cdn_forwarded_ip'] = array('HTTP_X_FORWARDED_FOR', 'HTTP_ALI_CDN_REAL_IP', 'X-Real-IP', 'True-Client-Ip');
foreach ($_ENV['cdn_forwarded_ip'] as $cdn_forwarded_ip) {
    if (isset($_SERVER[$cdn_forwarded_ip])) 
        $list = explode(',', $_SERVER[$cdn_forwarded_ip]);
        $_SERVER['REMOTE_ADDR'] = $list[0];
        break;
    }
}
$_ENV['sentry_dsn'] = '';
$_ENV['github_access_token'] = '';
$_ENV['php_user_group'] = 'www:www'
