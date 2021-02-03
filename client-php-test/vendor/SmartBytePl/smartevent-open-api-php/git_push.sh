#!/bin/sh
# Usage example: /bin/sh ./git_push.sh "minor update"
cd `dirname "$0"`

git_user_id="SmartBytePl"
git_repo_id="smartevent-open-api-php"
git_host="github.com"

release_note=$1

if [ "$release_note" = "" ]; then
    release_note="Minor update"
    echo "[INFO] No command line input provided. Set \$release_note to $release_note"
fi

git add .
git commit -m "$release_note"
git pull origin master
echo "Git pushing to https://${git_host}/${git_user_id}/${git_repo_id}.git"
git push origin master 2>&1 | grep -v 'To https'

