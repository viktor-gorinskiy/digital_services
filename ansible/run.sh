#!/usr/bin/env bash
SCRIPT=$(readlink -f "$0")
PATH=$(dirname "$SCRIPT")

ansible-playbook -i inventory/hosts-develop.yml full_install.yml -l develop
