#!/bin/bash

CLI_COLOR='\033[0;36m'
END_CLI_COLOR='\e[0m'
TAGS_NAME=$1

cd /var/www/b2s-magento-2.4
echo -e \"${CLI_COLOR}--------------------GIT RESET--------------------${END_CLI_COLOR}\"
git reset --hard
[[ $? -eq 0 ]] || exit 1
echo -e \"${CLI_COLOR}--------------------GIT PULL--------------------${END_CLI_COLOR}\"
git fetch origin --tags
git checkout tags/${TAGS_NAME}
[[ $? -eq 0 ]] || exit 1
echo -e \"${CLI_COLOR}--------------------COMPOSER INSTALL--------------------${END_CLI_COLOR}\"
composer install --prefer-dist
[[ $? -eq 0 ]] || exit 1
echo -e \"${CLI_COLOR}--------------------COMPILE--------------------${END_CLI_COLOR}\"
bin/magento setup:di:compile
[[ $? -eq 0 ]] || exit 1
echo -e \"${CLI_COLOR}--------------------CACHE FLUSH--------------------${END_CLI_COLOR}\"
bin/magento cache:flush
[[ $? -eq 0 ]] || exit 1
echo -e \"${CLI_COLOR}--------------------CONFIG CRONTAB--------------------${END_CLI_COLOR}\"
crontab -r || true
crontab -l | cat crontab.txt | crontab -
[[ $? -eq 0 ]] || exit 1
sudo chown -R $USER:nginx .
sudo chmod -R 777 var pub generated
[[ $? -eq 0 ]] || exit 1
