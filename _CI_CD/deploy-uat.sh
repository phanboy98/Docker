#!/bin/bash

CLI_COLOR='\033[0;36m'
END_CLI_COLOR='\e[0m'

cd /var/www/b2s-magento-2.4
[[ $? -eq 0 ]] || exit 1
echo -e \"${CLI_COLOR}--------------------ENABLE MAINTENANCE MODE--------------------${END_CLI_COLOR}\"
bin/magento maintenance:enable
[[ $? -eq 0 ]] || exit 1
echo -e \"${CLI_COLOR}--------------------GIT RESET--------------------${END_CLI_COLOR}\"
git reset --hard
[[ $? -eq 0 ]] || exit 1
echo -e \"${CLI_COLOR}--------------------GIT PULL--------------------${END_CLI_COLOR}\"
git fetch origin uat-cd
git checkout uat-cd
git pull
[[ $? -eq 0 ]] || exit 1
echo -e \"${CLI_COLOR}--------------------COMPOSER INSTALL--------------------${END_CLI_COLOR}\"
composer install --prefer-dist
[[ $? -eq 0 ]] || exit 1
echo -e \"${CLI_COLOR}--------------------SETUP UPGRADE--------------------${END_CLI_COLOR}\"
bin/magento setup:upgrade
[[ $? -eq 0 ]] || exit 1
echo -e \"${CLI_COLOR}--------------------COMPILE--------------------${END_CLI_COLOR}\"
bin/magento setup:di:compile
[[ $? -eq 0 ]] || exit 1
echo -e \"${CLI_COLOR}--------------------DEPLOY STATIC CONTENT--------------------${END_CLI_COLOR}\"
bin/magento setup:static-content:deploy en_US th_TH
[[ $? -eq 0 ]] || exit 1
echo -e \"${CLI_COLOR}--------------------CONFIG CRONTAB--------------------${END_CLI_COLOR}\"
crontab -r || true
crontab -l | cat crontab.txt | crontab -
[[ $? -eq 0 ]] || exit 1
echo -e \"${CLI_COLOR}--------------------DISABLE MAINTENANCE MODE--------------------${END_CLI_COLOR}\"
bin/magento maintenance:disable
[[ $? -eq 0 ]] || exit 1
