#! /bin/bash
reset
// reset is used to clear the terminal, uus k baadh ye niche ka likha hua aega.
echo "Select an option from below:"
echo "1) File Browser"
echo "2) Process Manager"
echo "3) Exit"
// echo is like printf jo b likega wo terminal mein display hoega.
read s
reset

while :
do
case $s in
// the above line is used for switch caseing, the value user inputs in s will be switched accordingly to the option below.
	1) echo "------------------------------------------------------------"
	   echo "          Welcome To Simple File Browser"
	   echo "------------------------------------------------------------"
	   echo -e "\n"
	   // above line to leave an empty line.
	   echo "Current Directory" 
	   pwd
	   // present working directory.
	   echo -e "\n"
	   echo "Files in Current Directory"
	   ls
	   // to list all the files present in the current folder.
	   echo -e "\n"
	   echo "Select an option from below"
	   echo "1) Change Current Directory"
	   echo "2) Create New Folder"
   	   echo "3) Delete a Folder"
   	   echo "4) Move File to another location"
	   echo "5) Rename File"
	   echo "6) Exit"
	   echo -e "\n"
	   read s1
	   echo -e "\n"
	  

	case $s1 in
	1) echo "Enter the Directory you want to work in or press .. to get out of this folder "
	   read direct
	   cd $direct
	   // cd is used to change current directory, cd .. aisa lika na terminal mein den it gets you out of the current folder.
	   ;;
	2) echo "Enter the name of the file you want to create"
		read filename
		mkdir $filename
		// mkdir is used to create a new folder. mkdir <foldername> 
		ls
		;;
	3) echo "Enter the directory of the file you want to delete"
		read pathname
		rm -r $pathname
		// rm is used to delete a folder, if the folder is not empty them rm se delete nai hoga so we use rm -r , where -r matlab delete all files inside it as well.
		ls
		;;
	4)echo "Enter the filename you want to move "
	  read filename
	  echo "Enter the directory where you want to move the file"
	  read direcname
	  mv $filename $direcname	
	  // mv command is used to move folder from one location to another. syntax is like mv <filename> <directory ex. dbit/home/Desktop>
          ;;
	5)echo "Enter the filename you want to rename"
	  read filename
	  echo "Enter the new filename"
	  read newname
	  mv $filename $newname
	  // mv command can also be used to rename a file. syntax mv <oldfilename> <newfilename>
	  ;;
	
	6)exit 0
     	  ;;
	
	esac;;

	
	2) echo "------------------------------------------------------------"
	   echo "          Welcome To Process Manager"
	   echo "------------------------------------------------------------"
	   echo -e "\n"
	   echo "Active Processes"
	   ps aux
	   // ps aux is used to display all currently running process. Its like a screenshot and doesnt update automatically.
	   echo -e "\n"
	   echo "Select an option:"
	   echo "1) Kill Process"
	   echo "2) Exit"
	   echo -e "\n"
	   read s2
	   echo -e "\n"
	   
	case $s2 in
	1) echo "Enter the id of the process you want to kill: "
	   read p
	   kill $p
	   // kill is used to kill a process. syntax kill <processid>
	   ;;
	2) exit 0
	   ;;
	   
	esac;;
	    
	3) exit 0
	;;
esac
done



	
