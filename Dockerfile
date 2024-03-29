FROM centos:7.4.1708

RUN yum -y update

RUN yum install epel-release yum-utils -y
RUN yum install http://rpms.remirepo.net/enterprise/remi-release-7.rpm -y
RUN yum-config-manager --enable remi-php74

RUN yum install -y \
    gcc \
    gcc-c++ \
    httpd \
    mod_ssl \
    mod_rewrite \
	zip \
	unzip \
    php \
    php-common \
    php-opcache \
    php-mcrypt \
    php-cli \
    php-gd \
    php-curl \
    php-mysql \
    php-dom \
    php-xml \
    php-mbstring \
    php-redis \
    git \
    libssl-dev \
    wget \
    update-ca-certificates \
    nano
    
RUN echo "ServerName localhost" >> /etc/httpd/conf/httpd.conf

RUN sed -i '/<Directory "\/var\/www\/html">/,/<\/Directory>/ s/AllowOverride None/AllowOverride all/' /etc/httpd/conf/httpd.conf

RUN sed -i -e 's/memory_limit = 128M/memory_limit = -1/g' /etc/php.ini


RUN mkdir /etc/httpd/sites-available
RUN mkdir /etc/httpd/sites-enabled

RUN export USER_NAME=root

EXPOSE 80 443

WORKDIR /var/www/html

COPY ./html/ ./

CMD ["/usr/sbin/httpd", "-DFOREGROUND"]
