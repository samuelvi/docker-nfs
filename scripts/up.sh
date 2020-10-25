#!/bin/bash


SCRIPTPATH="$( cd "$(dirname "$0")" >/dev/null 2>&1 ; pwd -P )"
docker-compose -f $SCRIPTPATH/../.docker/docker-compose.yaml up