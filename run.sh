#!/bin/bash

#set -e

if [ ! -z $(which terraform) ];
   then
	echo -e "Terraform is available.\n";
   else
	echo -e "Terraform is not available. Please install vagrant.\n";
	exit;
fi

if [ -f docker/.env ]
  then
    if [ -s docker/.env ]
    then
        echo -e "File .env exists and not empty\n"
    else
        echo -e "File .env exists but empty\n"
        cat docker_env_conf.example > docker/.env
    fi
  else
    echo -e "File .env not exists\n"
    touch docker/.env
    cat docker_env_conf.example > docker/.env
fi

terraform apply -auto-approve
echo -e "\n"
cat docker/.env
