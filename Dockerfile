FROM fauria/lamp

# copy the files over
COPY /www/flag.txt /home/flag.txt
COPY /www/index.php /var/www/html/index.php
COPY /www/index.php /var/www/html/index.php
COPY /www/test.php /var/www/html/test.php
COPY /www/garbarge /var/www/garbarge

EXPOSE 1337

CMD /usr/sbin/apache2ctl -D FOREGROUND