FROM centos:6.8

RUN yum clean all

RUN rpm -Uvh https://archives.fedoraproject.org/pub/archive/epel/6/x86_64/epel-release-6-8.noarch.rpm && \
    rpm -Uvh https://mirror.webtatic.com/yum/el6/latest.rpm

RUN yum install -y curl libxml2 php74w php74w-opcache php74w-pecl-memcached php74w-mysqlnd php74w-cli \
    php74w-gd git php74w-devel php74w-pear php74w-pecl-imagick httpd

RUN curl -sS https://getcomposer.org/installer | php && \
  mv composer.phar /usr/bin/composer
