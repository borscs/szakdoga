FROM ubuntu:latest
WORKDIR /php
RUN apt-get -y update && apt-get install -y
RUN apt-get -y install clang
FROM gcc:9.2
FROM php:7.3.3-apache
RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*
Expose 80

