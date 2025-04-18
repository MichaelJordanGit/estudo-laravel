# estudo-laravel

O que é o projeto de estudo? 

O projeto de estudos BioLinks consiste em criar um gestor de links parecido com linkthree. Ele possui diversas funcionalidades como cadastrar novos usuarios, deletar e atualizar cadastros de usuarios, assim como tambem cada usuario pode cadastrar, atualizar e deletar seus links. 
O projeto faz autenticações de usuario atravez de login para que cada usuario tenha seus recursos separados de outros usuarios.

Como utilizar o projeto?
Pré Requisitos:
    Antes de tudo precisa ter instalado no sistema:
- php 8.1
- Composer(Gerenciador de dependencias do PHP)
- MySQL para Banco dados
- NodeJs e NPM (Para utilizar o Vite)
- Git Bash (para clonar o repositorio)

____

 Passo 1:
 crie um repositorio 
 abra o terminal 
 entre no repositório via terminal 
 insira o comando abaixo 
git clone https://github.com/MichaelJordanGit/estudo-laravel/tree/main/002-BioLink

Passo 2:
instale o tailwind 
abra o terminal e entre na pasta do projeto
digite o seguinte comando dentro da pasta do terminal
npm install tailwindcss @tailwindcss/vite

Passo 3:
abra uma nova guia do terminal dentro do repositorio do projeto
digite o seguinte comando 
php artisan serve
abra o navegador digite http://localhost:8000

Passo 4:
abra o terminal dentro da pasta do repositorio do projeto 
digite  o seguinte comando para rodar as assets do front-end
npm run dev 
o servidor vite roda em http://localhost:5173




