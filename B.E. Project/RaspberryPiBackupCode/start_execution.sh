#!/bin/bash

while :
do
	python serial_input.py
	python upload_data.py
	sleep 10
done
