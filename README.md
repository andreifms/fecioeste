# Fecioeste

<p align="center">
 <a href="#-sobre-o-projeto">Sobre</a> •
 <a href="#-funcionalidades">Funcionalidades</a> •
 <a href="#-como-executar-o-projeto">Como executar</a> • 
 <a href="#-tecnologias">Tecnologias</a> •  
 <a href="#user-content--licença">Licença</a>
</p>

## 💻 Sobre o projeto
O Instituto Federal de Mato Grosso do Sul (IFMS) promove as Feiras de Ciência e Tecnologia nos dez municípios onde a instituição tem campus. 
Neste evento podem apresentar trabalhos estudantes dos ensinos fundamental (6º ao 9º ano), médio e técnico integrado das escolas das redes pública e privada dos municípios da área de abrangência dos campi do IFMS, assim como ex-alunos do Instituto Federal que concluíram os cursos após novembro do ano passado.
O objetivo desse projeto é facilitar a avaliação de trabalhos submetidos para a Feira de Ciência e Tecnologia da Região Sudoeste em Jardim (Fecioeste).

---

## ⚙️ Funcionalidades

- [ ] Os usuários com perfil Administrador tem acesso ao menu administrativo, onde podem:
    - [X] gerenciar os usuários, perfis e permissões
    - [X] gerenciar as páginas
    - [X] gerenciar as postagens
    - [X] gerenciar as categorias

- [ ] Os usuários tem acesso a parte pública da aplicação web, onde podem:
    - [X] Registrar-se como usuário comum
    - [ ] Logar-se para ter acesso ao menu administrativo

---
## 🚀 Como executar o projeto

### Pré-requisitos

Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas: [Git](https://git-scm.com), [PHP ^7.3|^8.0](https://www.php.net/downloads), [Composer](https://getcomposer.org/download/), [Laravel](https://laravel.com/docs/10.x/installation).

Além disto é bom ter um editor para trabalhar com o código como [VSCode](https://code.visualstudio.com/)

### 🎲 Rodando o Projeto 

#### Instalando as dependências
```bash
# Clone este repositório
$ git clone https://github.com/andreifms/fecioeste.git

# Acesse a pasta do projeto no terminal/cmd
$ cd fecioeste

# Instale as dependências composer
$ composer install


```
#### Configurando o projeto
1. Faça uma cópia do arquivo `.env.example` e renomeie para `.env`:
2. Crie um banco de dados
> Sugestão MariaDB ou MySQL: definição de collation: **utf8mb4_general_ci**

3. Configure a conexão com os dados do banco de dados no arquivo `.env`:
```php  
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=NOMEDOBANCO
    DB_USERNAME=USUARIO
    DB_PASSWORD=SENHA
```
#### Rodando o servidor
```bash    
# Criação de nova chave de criptografia da aplicação:
php artisan key:generate

#Criação do link simbólico:
php artisan storage:link
    
# Criação das tabelas e inserção dos dados no banco de dados:
php artisan migrate:fresh --force --seed

# Adicionar assets do voyager
php artisan vendor:publish --tag voyager_avatar
php artisan vendor:publish --tag dummy_content

# Execute a aplicação em modo de desenvolvimento
php artisan serve

# O servidor iniciará na porta:8000 - acesse <http://localhost:8000>
```

### 🎲 Acesso ao Projeto (servidor)
Usuários criados:
- **Admin** ➠ login: ```admin@admin.com``` senha: ```password```

**Criar usuário pelo terminal usando tinker:**
Executar o tinker
```bash
php artisan tinker
```
No tinker: 
```bash
$user = new \App\Models\User;
$user->email = 'admin@admin.com';
$user->password = Hash::make('senha'); # altere 'senha' para uma senha forte
$user->name = 'Nome do Administrator';
$user->save();
exit()
```
---

### Criar Migrations e Seeder a partir do banco

***gerar migrations a partir da tabela criada no banco***
```bash   
php artisan migrate:generate minha_tabela
```

***gerar seeders a partir dos dados inseridos no banco***
```bash   
php artisan iseed data_types,data_rows,menus,menu_items,roles,permissions,permission_role,settings --classnameprefix=Iseed --force
```

***Criação das tabelas e inserção dos dados no banco de dados:***
```bash   
php artisan migrate:fresh --force --seed
```

## 🛠 Tecnologias

As seguintes ferramentas foram usadas na construção do projeto:

- [Laravel 10](https://laravel.com/docs)
- [Bootstrap 5](https://getbootstrap.com/)
- [Font Awesome](https://fontawesome.com/search?o=r&m=free)

As seguintes dependências foram incluidas no projeto:
- [Voyager](https://github.com/thedevdojo/voyager)
- [Laravel Migrations Generator](https://github.com/kitloong/laravel-migrations-generator)
- [Iseed](https://github.com/orangehill/iseed)
- [Laravel Fortify](https://github.com/laravel/fortify)
- [Laravel Migrations Generator](https://github.com/kitloong/laravel-migrations-generator)
- [Inverse seed generator (iSeed)](https://github.com/orangehill/iseed)
- [LaravelLegends pt-br-validator](https://github.com/LaravelLegends/pt-br-validator)
---

## 💪 Como contribuir para o projeto

1. Faça um **fork** do projeto.
2. Crie uma nova branch com as suas alterações: `git checkout -b my-feature`
3. Salve as alterações e crie uma mensagem de commit contando o que você fez: `git commit -m "feature: My new feature"`
4. Envie as suas alterações: `git push origin my-feature`

## 📝 Licença

Este projeto é um software de código aberto licenciado sob a licença [gnu general public license version 3.0 (gplv3)](./LICENSE).
