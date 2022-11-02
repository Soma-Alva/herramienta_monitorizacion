#!/bin/bash

ip=$1
opcion=$2

ssh root@$ip bash -c "' 
    if [ "$opcion" = "Memoria" ]
    then
        free
    elif [ "$opcion" = "Disco" ]
    then
        df -h
    elif [ "$opcion" = "Ip" ]
    then
        echo "===Direccion Ip==="
        hostname -I
        
    elif [ "$opcion" = "Procesos" ]
    then 
        ps -e
    elif [ "$opcion" = "Usuarios" ]
    then
        w -f
    elif [ "$opcion" = "Puertos UDP" ]
    then
        netstat -lu
    elif [ "$opcion" = "Puertos TCP" ]
    then
        netstat -lt
    elif [ "$opcion" = "Tablas" ]
    then
        route -n
    elif [ "$opcion" = "Syslog" ]
    then
        cat /var/log/syslog
    fi
'"