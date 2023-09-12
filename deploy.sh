#!/bin/bash

DOCKER_APP_NAME=httpd

cd /home/ec2-user/silver

EXIST_CONTAINER=$(docker ps | grep $DOCKER_APP_NAME-main)

if [ -z "$EXIST_CONTAINER" ]; then
	docker-compose -p ${DOCKER_APP_NAME} -f docker-compose.yml -d --build

	echo "Build Complete ${DOCKER_APP_NAME}-main container"
fi

docker system prune -af
