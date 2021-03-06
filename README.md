# Crud para cadastro de motoristas

### Tecnologias utilizadas

- PHP
- Bootstrap
- Composer
- MySQL
---

### Executando o projeto

Caso não possua, é necessário a instalação do PHP, Mysql e apache server, a maneira mais simples de instalação e configuração é através do pacote XAMPP:

- [Windows](https://www.apachefriends.org/xampp-files/7.4.10/xampp-windows-x64-7.4.10-0-VC15-installer.exe)
- [Linux](https://www.apachefriends.org/xampp-files/7.4.10/xampp-linux-x64-7.4.10-0-installer.run)

Em caso de dúvidas para instalação/configuração:

- [Linux](https://www.apachefriends.org/faq_linux.html)
- [Windows](https://www.apachefriends.org/faq_windows.html)

Após a configuração correta do XAMPP ao digitar: localhost na aba do navegador é possível visualizar a página inicial do XAMPP.

A pasta do projeto deve ser colocada dentro da pasta htdocs:

- Windows - <strong>xampp/htdocs/</strong>
- Linux - <strong>/opt/lampp/htdocs/</strong>

Dentro de editor de banco de dados de sua preferência adicione o seguinte código:

1- Para criar o Database:

```SQL
  CREATE DATABASE `Nome da database`;
```

2 - Criando a tabela que será utilizada no projeto:

```SQL
  CREATE TABLE `Nome da tabela` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `cpf` varchar(14) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `situacao` enum('1','2','3') COLLATE utf8mb4_general_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf` (`cpf`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
```
---

### Configurando a conexão com o banco de dados

Para que possa ser realizada a conexão com o banco de dados criados, é necessário realizar a alteração de algumas configurações dentro do arquivo app/DB/Database.php:

1 - Mudança dos nomes de HOST, NAME, USER e PASS:

```PHP
class Database
{
  /**
   * Host de conexão com o banco de dados
   * @var string
   */
  const HOST = 'Nome do HOST';

  /**
   * Nome do banco de dados
   * @var string
   */
  const NAME = 'Nome do Database';

  /**
   * Usuário do banco
   * @var string
   */
  const USER = 'Nome do usuário do banco de dados';

  /**
   * Senha de acesso do banco
   * @var string
   */
  const PASS = 'Senha do usuário do banco de dados';
```

2 - Mudança do nome da tabela no arquivo app/Entity/Motorista.php:
Onde houver 'tb_motorista' mudar pelo nome da tabela criado por você, como por exemplo:

```PHP
public function cadastrar()
  {
    // INSERIR O MOTORISTA NO BANCO
    $obDatabase = new Database('tb_motorista');
    $this->id = $obDatabase->insert([
      'nome' => $this->nome,
      'email' => $this->email,
      'cpf' => $this->cpf,
      'situacao' => $this->situacao,
      'status' => $this->status
    ]);

    // RETORNAR SUCESSO
    return true;
  }
```
