#!/bin/sh

mongosh -u root -p secretpass <<EOF
var cfg = {
    "_id": "rs0",
    "protocolVersion": 1,
    "version": 1,
    "members": [
        {
            "_id": 0,
            "host": "mongo-node-1",
            "priority": 1
        },
        {
            "_id": 1,
            "host": "mongo-node-2",
            "priority": 1
        },
        {
            "_id": 2,
            "host": "mongo-node-3",
            "priority": 1
        }
    ]
};
rs.initiate(cfg);
rs.status();
EOF