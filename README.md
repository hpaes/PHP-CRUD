# Crud para cadastro de motoristas

### Tecnologias utilizadas
- PHP
- Bootstrap
- Composer
- MySQL

### Para utilização do projeto, é necessário a criação de um banco de dados:
Caso não possua, é necessário a instalação do PHP, Mysql e apache server, a maneira mais simples de instalação e configuração é através do pacote XAMPP:
- [Windows](https://www.apachefriends.org/xampp-files/7.4.10/xampp-windows-x64-7.4.10-0-VC15-installer.exe)
- [Linux](https://www.apachefriends.org/xampp-files/7.4.10/xampp-linux-x64-7.4.10-0-installer.run)

Em caso de dúvidas para instalação/configuração:
- [Linux]:(https://www.apachefriends.org/faq_linux.html)
- [Windows]:(https://www.apachefriends.org/faq_windows.html)

Após a configuração correta do XAMPP ao digitar: localhost na aba do navegador é possível visualizar a página inicial do XAMPP.

Dentro de editor de banco de dados de sua preferência adicione o seguinte código:

1- Para criar o Database:

```SQL
  CREATE DATABASE `Nome da database`;
```
2 - Criando a tabela que será utilizada no projeto:

```SQL
  CREATE TABLE `Nome da database`.`Nome da tabela` ( 
  `id` INT NOT NULL , 
  `nome` VARCHAR(150) NOT NULL , 
  `cpf` VARCHAR(14) NOT NULL , 
  `email` VARCHAR(100) NOT NULL , 
  `situacao` ENUM('0','1','2') NOT NULL , 
  `status` BOOLEAN NOT NULL , 
   PRIMARY KEY (`id`), 
   UNIQUE (`cpf`), 
   UNIQUE (`email`)) ENGINE = InnoDB;
```
---
### Configurando a conexão com o banco de dados
Para que possa ser realizada a conexão com o banco de dados criados, é necessário realizar a alteração de algumas configurações dentro do arquivo app/Db/Database.php:
1 - Mudança dos nomes de HOST, NAME, USER e PASS:

``` PHP
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
