#!/bin/bash

REPO='/var/www/website'
DIST='/var/www/collectiveforblackiranians.org'

rsync --delete --recursive --quiet "$REPO/wp-content/themes/cbi/" "$DIST/wp-content/themes/cbi/"
rsync --delete --recursive --quiet "$REPO/wp-content/plugins/" "$DIST/wp-content/plugins/"
