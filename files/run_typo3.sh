#!/bin/bash -f

################################################################
## powered by AWO on 2019-09-10 10:41
## for clean docker host on old containers
## @version 0.1b
## @author awo
################################################################

if [ -z $1 ]; then
        echo "used script $0 -run"
        exit 1
fi

cd ../clusterconfig/typo3 && docker-compose up -d
exit 0