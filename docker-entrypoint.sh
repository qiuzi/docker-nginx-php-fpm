#! /bin/bash -eu
echo -e "$CONFIG_FILE" > config/.config.php
if [ "$DATABASE" = "yse" ]; then
{
 vendor/bin/phinx migrate && \
 php xcat Tool importAllSettings
 php xcat Tool detectConfigs
 php xcat User createAdmin <<EOF
 echo $ADMINEMAIL
 echo $ADMIMNPASSWD
 Y
EOF
 php xcat Tool initQQwry
 }
fi

envsubst '$PORT' < /nginx.conf.template > /etc/nginx/nginx.conf

cat /etc/nginx/nginx.conf

supervisord -c /supervisord.conf
