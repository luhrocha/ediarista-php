## Painel administrativo do E-diarista

Projeto construído utilizando o Laravel, AdminLTE e MySQL.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

### Instalando o projeto

#### Clonar o repositório

```
git clone git@github.com:luhrocha/ediarista-php.git (ssh)
```

Ou

```
git clone https://github.com/luhrocha/ediarista-php.git (https)
```

#### Instalar as dependências

```
composer install
```

Ou em ambiente de desenvolvimento:

```
composer update
```

#### Criar arquivo de configurações de ambiente

Copiar o arquivo de exemplo `.env.example` para `.env` na raiz do projeto, configurar os detalhes da aplicação e conexão com o banco de dados.

#### Criar a estrutura no banco de dados

```
php artisan migrate
```

#### Criar o usuário admin

```
php artisan db:seed
```

Usuario criado: admin@admin.com
Senha: 12345678

#### Iniciar o servidor de desenvolvimento

```
php artisan serve
```

## Front-end do E-diarista

O front-end foi desenvolvido utilizando o React, confira:
<p align="center">
<a href="https://github.com/luhrocha/ediarista-react">E-diarista (Front-end)</a>
</p>


