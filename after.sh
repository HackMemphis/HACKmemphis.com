#!/bin/sh

# If you would like to do some extra provisioning you may
# add any commands you wish to this file and they will
# be run after the Homestead machine is provisioned.

apt-get -y install phantomjs screen
mysql -u root -pvagrant -e "GRANT ALL PRIVILEGES ON homestead.* TO 'homestead'@'%' IDENTIFIED BY 'secret'"
echo "Set Travis privs"
(crontab -l 2>/dev/null; echo "@reboot    screen -S server -d -m phantomjs --webdriver=4444") | crontab -
echo "Added scree phantomjs to crontab"
screen -S server -d -m phantomjs --webdriver=4444
echo "Started phantomjs is screen"
perl -pi -e 's/upload_max_filesize = 2M/upload_max_filesize = 50M/g' /etc/php5/fpm/php.ini
perl -pi -e 's/post_max_size = 8M/post_max_size = 51M/g' /etc/php5/fpm/php.ini
service nginx restart
service php5-fpm reload
/usr/local/bin/composer self-update
echo "" >> /home/vagrant/.bashrc
echo "PATH=$PATH:/home/vagrant/hackmemphis.dev/vendor/bin" >> /home/vagrant/.bashrc
echo "export PATH" >> /home/vagrant/.bashrc
echo Done!