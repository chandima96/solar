#!/bin/bash

# Navigate to the project directory
cd /var/www/html/solar/

# Run npm run dev in the background and redirect output to nohup.out
nohup npm run dev > nohup.out 2>&1 &
