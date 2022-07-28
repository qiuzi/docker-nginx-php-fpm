#! /bin/bash -eu
echo $CONFIG_FILE > config/.config.php
if [ "$DATABASE" = "yse" ]; then
{
 vendor/bin/phinx migrate && \
 php xcat Tool importAllSettings
 php xcat Tool detectConfigs
 php xcat User createAdmin <<EOF
 $ADMINEMAIL
 $ADMIMNPASSWD 
 Y
 EOF
 php xcat Tool initQQwry
 }
fi

envsubst '$PORT' < /nginx.conf.template > /etc/nginx/nginx.conf

cat /etc/nginx/nginx.conf

supervisord -c /supervisord.conf
