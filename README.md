<a id="readme-top"></a>

[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url] 
[![Issues][issues-shield]][issues-url] 
[![LinkedIn][linkedin-shield]][linkedin-url]

<br /> 
<div align="center"> 
    <h3 align="center">📚 Biblioteca Digital</h3> 
    <p align="center"> 
    Projeto completo de uma plataforma digital para gerenciamento de livros, feita com Laravel, Blade, PHP, TailwindCSS e MySQL. <br/> <a href="https://github.com/Matvops/Biblioteca-Digital"><strong>Veja o código »</strong></a><br/> <br/> 
    <a href="https://github.com/Matvops/Biblioteca-Digital/issues/new?labels=bug">Reportar Bug</a> · 
    <a href="https://github.com/Matvops/Biblioteca-Digital/issues/new?labels=enhancement">Sugerir Recurso</a> 
    </p> 
</div>



<!-- TABLE OF CONTENTS -->
<details> 
    <summary>📑 Sumário</summary> 
        <ol> 
            <li><a href="#about-the-project">Sobre o Projeto</a></li> 
            <li><a href="#built-with">Tecnologias Usadas</a></li> 
            <li><a href="#requirements">Requisitos</a></li> 
            <li><a href="#installation">Instalação</a></li> 
            <li><a href="#usage">Exemplos de Uso</a></li> 
            <li><a href="#roadmap">Planejamento</a></li> 
            <li><a href="#contributing">Contribuindo</a></li> 
            <li><a href="#contact">Contato</a></li> 
        </ol> 
</details>



<!-- ABOUT THE PROJECT -->
<br>
<h1 id="about-the-project"> 📖 Sobre o Projeto </h1>

A Biblioteca Digital é uma aplicação web desenvolvida como projeto de estudo, com o objetivo de gerenciar livros em um sistema simples, intuitivo e com visual agradável.

Funcionalidades incluem:

    Cadastro e gerenciamento de livros

    Interface limpa e responsiva com TailwindCSS

    Backend em Laravel com Blade templates

    Banco de dados relacional em MySQL

Este projeto foi pensado para praticar conhecimentos em PHP, Laravel e boas práticas de desenvolvimento web.

<p align="right">(<a href="#readme-top">voltar ao topo</a>)</p>


<br>
<h1 id="built-with">🛠️ Tecnologias Usadas</h1>
<br>

[![PHP][PHP.com]][PHP-url]
<br>
[![Laravel][Laravel.com]][Laravel-url]
<br>
[![Tailwind][Tailwind.com]][Tailwind-url]
<br>
[![MySQL][MySql.com]][MySql-url]
<br>
[![VsCode][VsCode.com]][VsCode-url]
<br>
[![Ubuntu][Ubuntu.com]][Ubuntu-url]


<p align="right">(<a href="#readme-top">voltar ao topo</a>)</p>


<br>
<h1 id="requirements">✅ Requisitos</h1>

Antes de começar, você precisa ter instalado:

    PHP 8.x+

    Composer

    MySQL

    Node.js e NPM (para compilar o TailwindCSS)

    Laravel CLI

<p align="right">(<a href="#readme-top">voltar ao topo</a>)</p>
<br>
<h1 id="installation">⚙️ Instalação</h1>

Clone o repositório:

    git clone https://github.com/Matvops/Biblioteca-Digital.git

    cd Biblioteca-Digital

Instale as dependências PHP:

    composer install

Instale as dependências front-end:

    npm install && npm run dev

Crie e configure seu arquivo .env:

    cp .env.example .env

    php artisan key:generate

Configure o banco de dados no .env e rode as migrações:

    php artisan migrate

Inicie o servidor local:

    php artisan serve

<p align="right">(<a href="#readme-top">voltar ao topo</a>)</p>



<br>
<h1 id="usage">📸 Exemplos de Uso</h1>

Exemplo de cadastro de livros com validação de formulário e listagem dinâmica.

    Prints e vídeos podem ser adicionados aqui no futuro.

<p align="right">(<a href="#readme-top">voltar ao topo</a>)</p>


<br>
<h1 id="roadmap">🛣️ Planejamento</h1>

[x] - CRUD de livros

[x] - Integração com TailwindCSS

[x] - Upload de capas de livros

[ ] - Sistema de login/autenticação

[ ] - Painel administrativo

<p align="right">(<a href="#readme-top">voltar ao topo</a>)</p>


<br>
<h1 id="contributing">🤝 Contribuindo</h1>

    Faça um fork do projeto

    Crie sua branch com a feature (git checkout -b feature/NovaFuncionalidade)

    Commit suas alterações (git commit -m 'Adiciona nova funcionalidade')

    Dê push na branch (git push origin feature/NovaFuncionalidade)

    Abra um Pull Request

<p align="right">(<a href="#readme-top">voltar ao topo</a>)</p>


<br>
<h1 id="contact">📬 Contato</h1>

Matheus Cadenassi - @Matvops

Link do projeto: https://github.com/Matvops/Biblioteca-Digital
<p align="right">(<a href="#readme-top">voltar ao topo</a>)</p>


[contributors-shield]: https://img.shields.io/github/contributors/matvops/Biblioteca-Digital?style=for-the-badge
[contributors-url]: https://github.com/Matvops/Biblioteca-Digital/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/matvops/Biblioteca-Digital?style=for-the-badge
[forks-url]: https://github.com/Matvops/Biblioteca-Digital/network/members
[issues-shield]: https://img.shields.io/github/issues/matvops/Biblioteca-Digital?style=for-the-badge
[issues-url]: https://github.com/Matvops/Biblioteca-Digital/issues
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://www.linkedin.com/in/matheus-cadenassi-799125321/
[product-screenshot]: images/screenshot.png
[PHP.com]: https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white
[PHP-url]: https://www.mysql.com/
[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[Tailwind.com]: https://img.shields.io/badge/tailwindcss-%2338B2AC.svg?style=for-the-badge&logo=tailwind-css&logoColor=white
[Tailwind-url]: https://tailwindcss.com/
[MySql.com]: https://img.shields.io/badge/mysql-4479A1.svg?style=for-the-badge&logo=mysql&logoColor=white
[MySql-url]: https://www.mysql.com/
[VsCode.com]: https://img.shields.io/badge/Visual%20Studio%20Code-0078d7.svg?style=for-the-badge&logo=visual-studio-code&logoColor=white
[VsCode-url]: https://www.mysql.com/
[Ubuntu.com]: https://img.shields.io/badge/Ubuntu-E95420?style=for-the-badge&logo=ubuntu&logoColor=white
[Ubuntu-url]: https://www.mysql.com/

