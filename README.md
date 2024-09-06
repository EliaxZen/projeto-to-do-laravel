
# 📋 Projeto To-Do Laravel

Este é um sistema de gerenciamento de tarefas (To-Do) desenvolvido com o framework Laravel. Ele oferece uma interface intuitiva para criar, editar, excluir e visualizar tarefas, além de autenticação de usuários.

## 🚀 Funcionalidades

- **Adicionar Tarefas**: Criação rápida de novas tarefas com possibilidade de categorização.
- **Editar Tarefas**: Atualize suas tarefas existentes, incluindo a mudança de categorias e datas.
- **Excluir Tarefas**: Remova tarefas concluídas ou indesejadas.
- **Visualizar Tarefas**: Acompanhe todas as tarefas, filtradas por categorias, datas ou status.
- **Autenticação e Registro de Usuário**: Gerenciamento de contas com login seguro.
- **Interface Responsiva**: Template moderno com ícones, animações e transições suaves.
- **Sincronização com Banco de Dados**: Tarefas e atualizações são sincronizadas em tempo real.
- **Filtro e Ordenação de Tarefas**: Filtros dinâmicos por data, status e categorias.

## 🛠️ Tecnologias Utilizadas

- **Laravel** - Framework PHP para desenvolvimento web.
- **MySQL** - Banco de dados relacional.
- **Laravel Tinker** - Ferramenta para interagir com os modelos de dados no terminal.
- **Carbon** - Biblioteca para manipulação de datas no Laravel.

## ⚙️ Instalação

1. Clone o repositório:
   ```bash
   git clone https://github.com/EliaxZen/projeto-to-do-laravel.git
   ```
2. Instale as dependências do projeto:
   ```bash
   composer install
   npm install
   ```
3. Configure o arquivo `.env` com as credenciais do banco de dados:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. Execute as migrations para criar as tabelas do banco de dados:
   ```bash
   php artisan migrate
   ```
5. Popule o banco de dados com dados iniciais usando seeders:
   ```bash
   php artisan db:seed
   ```
6. Inicie o servidor local:
   ```bash
   php artisan serve
   ```

## 🗄️ Planejamento do Banco de Dados

- **Tabela de Usuários**: Armazena informações dos usuários registrados.
- **Tabela de Tarefas**: Contém detalhes das tarefas, incluindo título, descrição, categoria, status e data de conclusão.
- **Tabela de Categorias**: Lista de categorias para organizar as tarefas.
- **Relacionamentos**: Relaciona usuários e tarefas, permitindo que cada usuário gerencie suas próprias tarefas.

### 🗺️ Diagrama ER (Entidade-Relacionamento)

- **Usuários** - Relacionamento 1:N com **Tarefas**.
- **Tarefas** - Relacionamento N:1 com **Categorias**.

## 🛠️ Migrations e Relacionamentos

### Migration de Usuários:

```php
Schema::create('users', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('email')->unique();
    $table->timestamp('email_verified_at')->nullable();
    $table->string('password');
    $table->rememberToken();
    $table->timestamps();
});
```

### Migration de Tarefas:

```php
Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_done')->default(false);
            $table->string('title');
            $table->string('description');
            $table->dateTime('due_date');
            $table->foreignIdFor(User::class)->references('id')->on('users')->onDelete('CASCADE');
            $table->foreignIdFor(Category::class)->references('id')->on('categories')->onDelete('CASCADE');
            $table->timestamps();
        });
```

### Migration de Categorias:

```php
Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(false);
            $table->string('color')->default('#808080');
            $table->foreignIdFor(User::class)->references('id')->on('users')->onDelete('CASCADE');
            $table->timestamps();
        });
```

## 🔄 Seeders e Factories

### Exemplo de Factory para Tarefas:

```php
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user = User::all()->random();

        while (count($user->categories) == 0) {
            $user = User::all()->random();
        }

        return [
            //
            'is_done' => $this->faker->boolean(),
            'title' => $this->faker->text(30),
            'description' => $this->faker->text(60),
            'due_date' => $this->faker->dateTime(),
            'user_id' => $user,
            'category_id' => $user->categories->random(),
        ];
    }
}
```

## 🎨 Criação do Template

O template do projeto foi estruturado com foco em usabilidade e design responsivo. As principais áreas incluem:

- **Header e Navegação**: Menu de navegação dinâmico, com rotas protegidas.
- **Listagem de Tarefas**: Exibe as tarefas em um layout de cards, com filtros por categoria e status.
- **Formulário de Criação/Edição de Tarefas**: Interface intuitiva para adicionar e editar tarefas.
- **Animações e Transições**: Elementos animados para melhorar a experiência do usuário.

## 🔒 Autenticação e Segurança

- **Registro de Usuários**: Formulário de registro com validação e confirmação de senha.
- **Login/Logout**: Gerenciamento de sessão seguro, com suporte a middleware de autenticação.
- **CSRF Token**: Proteção contra ataques CSRF utilizando tokens gerados automaticamente pelo Laravel.

## 🛠️ Funcionalidades Extras

- **Filtros Dinâmicos**: Filtragem de tarefas por data, status e categorias, utilizando query strings e integração com a biblioteca Carbon para manipulação de datas.
- **Tradução de Datas**: Exibição de datas no formato local utilizando Carbon.
- **Interface de Edição de Tarefas**: Interface aprimorada para editar e atualizar tarefas existentes.

## 📸 Demonstração

### 🏠 Home
![Home](https://github.com/user-attachments/assets/1c0ead62-7cd5-4a4b-ab90-2cbd2f57245a)

### 🔐 Login
![Login](https://github.com/user-attachments/assets/9b7478a5-b9eb-4141-982a-edf92134d462)

### 📝 Registrar-se
![Registrar-se](https://github.com/user-attachments/assets/7852e119-24c1-4e94-9be7-8aac3ab532ce)

### ➕ Criar Tarefa
![Criar Tarefa](https://github.com/user-attachments/assets/9638cf83-b1d0-4838-9fe2-a8f023b83962)

### ✏️ Editar Tarefa
![Editar Tarefa](https://github.com/user-attachments/assets/2a892e64-64b3-44d6-bf79-241c43487574)

## 🤝 Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues e enviar pull requests. Para mais detalhes, consulte o guia de contribuição no repositório.

## 📧 Contato

Em caso de dúvidas ou sugestões, entre em contato via galvaoalveseliascode@gmail.com ou (https://www.linkedin.com/in/elias379/).
