📋 Pré-requisitos

🔧 1° PASSO:

- Ir no arquivo -> c:\xampp\php\php.ini (Tipo: parâmetros de configuração)
- Alterar as seguintes linhas:
  SMTP=smtp.gmail.com
  smtp_port=587
  sendmail_from=comunidadevidaporvidas@gmail.com
  sendmail_path="\"C:\xampp\sendmail\sendmail.exe\" -t"

🔧 2° PASSO:

- Ir no arquivo -> C:\xampp\sendmail\sendmail.ini (Tipo: parâmetros de configuração)
- Alterar as seguintes linhas:
  smtp_server=smtp.gmail.com
  smtp_port=587
  debug_logfile=debug.log
  auth_username=comunidadevidaporvidas@gmail.com
  auth_password=**\*\*** (inserir a senha do email)
  force_sender=comunidadevidaporvidas@gmail.com
  hostname=localhost

📌OBS:

- PARA CHEGAR NO SEU EMAIL É SO ALTERAR OS CAMPOS DE EMAIL, USERNAME E PASSWORD
