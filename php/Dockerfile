FROM trzeci/emscripten AS qtbuilder
# Update apps on the base image
RUN apt-get -y update && apt-get install -y

# Install the Clang compiler
RUN apt-get -y install clang
FROM ubuntu:latest

WORKDIR /php

RUN apt-get update && apt-get install -y \
    g++ \
    cmake \
    git \
    cppcheck \
    qt5-default \
    qtbase5-dev \
    lcov \
&& rm -rf /var/lib/apt/lists/*
# Build GTest library

FROM gcc:9.2
FROM php:7.3.3-apache
RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*
Expose 80

