@echo off
dir %1 /-p /o:gn > "%temp%\Listing"
start /w notepad /p "%temp%\Listing"
del "%temp%\Listing"
exit