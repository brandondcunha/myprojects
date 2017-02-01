import serial
import time
import os
def getPort():
	op=os.listdir("/dev")
	for i in op:
		if "ACM" in i:
			return i
ser = serial.Serial('/dev/'+getPort(),9600)
x=1
i=0
ser.write(str(x))
f=open("readings.txt",'w')
ser.flushInput()
while i<4:
	x=ser.readline()
	print "%s" %x
	i=i+1
	f.write(x)
f.close()
ser.flushInput()
ser.close()

