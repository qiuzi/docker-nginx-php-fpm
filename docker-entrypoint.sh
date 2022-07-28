#! /bin/bash -eu
#cat $CONFIG_FILE >config/.config.php
# vendor/bin/phinx migrate && \
# php xcat Tool importAllSettings
# php xcat Tool detectConfigs
# php xcat User createAdmin <<EOF
# openpanel@qq.com
# admin 
# Y
# EOF
# php xcat Tool initQQwry

envsubst '$PORT' < /nginx.conf.template > /etc/nginx/nginx.conf

cat /etc/nginx/nginx.conf

supervisord -c /supervisord.conf

