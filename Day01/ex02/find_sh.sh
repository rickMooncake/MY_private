#!/bin/bash
ls -1 --file-type *.sh | sed -e 's/\.sh$//'
