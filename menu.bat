@echo off
setlocal
cls

echo ===== Menuzinho do tio ======
echo =1- Abrir com VSCode              
echo =2- Executar com node           
echo =3-      
echo =4- LIVRE
echo =5- LIVRE
echo =6- LIVRE     
echo =7- LIVRE		     
echo =8- LIVRE     
echo ===== Executar projeto ======
echo =9-  LIVRE	     
echo =10- LIVRE 	     
echo =11- LIVRE  
echo =12- LIVRE    
 

set /p numero=Digite o numero projeto:


echo %numero%

if "%numero%"=="1" (
code "D:\projeto\"
REM Abre o VSCode no terminal, já com a pasta projeto que está no Disco D: em sua área de trabalho.

)

if "%numero%"=="2" (
    start cmd /k cd /d D:\projeto\ ^& yarn start

REM Abre um segundo Prompt de comando, entra no diretório "projeto" e executa o comando yarn start para iniciar uma aplicação
)


REM Este menu base, premite abrir rápidamente coisas que precisariam de um pouco mais de trabalho de forma rápida
REM Usufruindo de funções nativas do próprio windows.

REM D:\ServerPHP\xamp8.2MySQL\xampp-control.exe