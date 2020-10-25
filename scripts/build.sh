#!/bin/bash

set -a
UUID=`id -u`
GUID=`id -g`

SCRIPTPATH="$( cd "$(dirname "$0")" >/dev/null 2>&1 ; pwd -P )"

docker-compose -f $SCRIPTPATH/../.docker/docker-compose.yaml build --build-arg UUID=$UUID --build-arg GUID=$GUID
