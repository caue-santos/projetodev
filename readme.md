# Marvel Project

## Introdução

> Este projeto é um exemplo de uso da  [API Marvel](https://developer.marvel.com/) utilizando o Laravel Framework.

## Tecnologias utilizadas

> 
* Composer 
* Laravel Framework 5.8.35
* Material Design Bootstrap
* PHP 7.3
* cURL
* Linux Apache Server
* Conta de desenvolvedor no Portal Marvel

## Instalação

> Com seu servidor web já configurado (recomenda-se linux), você deve fazer o download do projeto, ou o clone do repositório:
```
git clone https://github.com/caue-santos/projetodev.git
```
Acesse o diretório da aplicação e instale suas dependências através do Composer:
```
composer install
```
Como você já possui as chaves obtidas no Portal Marvel, agora é necessário renomear o arquivo .env.example para apenas .env:
```
mv .env.example .env
```
Agora que já possui um arquivo .env, vamos efetuar as configurações. Gere uma chave para sua aplicação:
```
php artisan key:generete
```
É necessário alterar as linhas abaixo contidas no arquivo, pelos dados obtidos no Portal Marvel com sua conta de desenvolvedor:

PUBLIC_KEY_API=chave_publica

PRIVATE_KEY_API=chave_privada


# Rotas
> A aplicação possui quatro rotas cadastradas, partindo do pressuposto que a raiz de uma aplicação Laravel é o diretório 'public'.
* **/ (Home)** - a home inicial do site;
* **Personagens** - menu dropdown para a seleção do personagem;
* **/personagem/demolidor** - uma breve descrição e histórias relacionadas ao personagem;
* **/personagem/iron-man** - uma breve descrição e histórias relacionadas ao personagem;
* **/personagem/rocket** - uma breve descrição e histórias relacionadas ao personagem;

# Códigos
> Todos os scripts relacionados a lógica de negócio para buscar os dados, usam o padrão da estrutura disponibilizada pelo Laravel Framework:
* **Views**: presentes do diretório *resouces/views/*;
* **Controllers**: presentes em *app/Http/Controllers*;
* **Rotas**: configuradas em *app/routes/web.php*.
