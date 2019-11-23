FROM ubuntu:latest
WORKDIR /source
FROM php:7.3.3-apache

RUN apt-get update && apt-get install -y \
    cmake \
    git \
    cppcheck \
    qt5-default \
    qtbase5-dev \
    lcov \
&& rm -rf /var/lib/apt/lists/*
RUN apt-get -y update && apt-get install -y
RUN apt-get -y install clang
RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*
Expose 80

