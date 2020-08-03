#!/bin/bash

SERVER='cbi'
REPO='/var/www/website'

ssh "$SERVER" "cd $REPO && git pull && $REPO/bin/update.sh"
