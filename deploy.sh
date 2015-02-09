#!/bin/bash
rsync -zrpt --delete --progress --force --delete-excluded --exclude=deploy.sh --exclude=.gitignore --exclude=.DS_Store --exclude=.git --exclude=.idea ~/Sites/phpish-skeleton/ username@your.hosting-site.com:/home/username/webapps/site_name/