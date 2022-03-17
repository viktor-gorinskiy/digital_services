#!/usr/bin/env bash
ansible-playbook -i inventory/hosts-develop.yml full_install.yml -l develop