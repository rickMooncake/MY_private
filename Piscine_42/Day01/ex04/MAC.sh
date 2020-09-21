#!/bin/bash
ifconfig | grep ether | grep -o "[0-9a-f][0-9a-f]:[1-9a-f][1-9a-f]:[1-9a-f][1-9a-f]:[1-9a-f][1-9a-f]:[1-9a-f][1-9a-f]:[1-9a-f][1-9a-f]"
