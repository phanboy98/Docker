#!/bin/bash

CLI_COLOR='\033[0;36m'
END_CLI_COLOR='\e[0m'
TAGS_NAME=$1

cd /var/www/b2s-magento-2.4
echo -e \"${CLI_COLOR}--------------------ENABLE MAINTENANCE MODE--------------------${END_CLI_COLOR}\"
bin/magento maintenance:enable
[[ $? -eq 0 ]] || exit 1
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
echo -e \"${CLI_COLOR}--------------------SETUP UPGRADE--------------------${END_CLI_COLOR}\"
bin/magento setup:upgrade
[[ $? -eq 0 ]] || exit 1
echo -e \"${CLI_COLOR}--------------------COMPILE--------------------${END_CLI_COLOR}\"
bin/magento setup:di:compile
[[ $? -eq 0 ]] || exit 1
echo -e \"${CLI_COLOR}--------------------DEPLOY STATIC CONTENT--------------------${END_CLI_COLOR}\"
bin/magento setup:static-content:deploy en_US th_TH
[[ $? -eq 0 ]] || exit 1
echo -e \"${CLI_COLOR}--------------------DISABLE MAINTENANCE MODE--------------------${END_CLI_COLOR}\"
bin/magento maintenance:disable
[[ $? -eq 0 ]] || exit 1
sudo chown -R $USER:nginx .
sudo chmod -R 777 var pub generated
[[ $? -eq 0 ]] || exit 1
