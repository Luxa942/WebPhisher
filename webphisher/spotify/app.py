import subprocess
import os
current_directory = os.path.dirname(os.path.abspath(__file__))


php_server_command = ['php', '-S', 'localhost:8000', '-t', current_directory]


os.chdir(current_directory)


process = subprocess.Popen(php_server_command)

try:
    process.wait()
except KeyboardInterrupt:
    process.terminate()
