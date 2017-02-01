import requests

f=open("readings.txt",'r')
temp=f.readline()
humidity=f.readline()
soilm=f.readline()
water=f.readline()
f.close()

url='http://chilicroptest.esy.es/upload_data.php'
payload={'temp':str(temp),'humidity':str(humidity),'soil':str(soilm),'water':str(water)}
r = requests.get(url,params=payload)
print 'Data Uploaded'
