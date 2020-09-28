<?php

namespace App\Entity;

use App\DB\Database;
use \PDO;

class Motorista
{
  /**
   * Identificador único do motorisdta
   * @var integer
   */
  public $id;

  /**
   * Nome do motorista
   * @var string
   */
  public $nome;

  /**
   * Email do motorista
   * @var string
   */
  public $email;

  /**
   * CPF do motorista
   * @var string
   */
  public $cpf;

  /**
   * Situação do motorista
   * @var string
   */
  public $situacao;

  /**
   * Status do motorista
   * @var integer (0/1)
   */
  public $status;

  /**
   * Método responsável por cadastrar um novo motorista no banco
   * @return boolean
   */
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

  /**
   * Método responsável por atualizar a vaga no banco
   * @return boolean
   */
  public function atualizar()
  {
    return (new Database('tb_motorista'))->update('id = ' . $this->id, [
      'nome' => $this->nome,
      'email' => $this->email,
      'cpf' => $this->cpf,
      'situacao' => $this->situacao,
      'status' => $this->status
    ]);
  }

  /**
   * Método responsável por excluir motorista do banco
   * @return boolean
   */
  public function excluir()
  {
    return (new Database('tb_motorista'))->delete('id = ' . $this->id);
  }

  /**
   * Método responsável por obter os motoristas do banco de dados
   * @param  string $where
   * @param  string $orderl
   * @param  string $limit
   * @return array
   */
  public static function getMotoristas($where = null, $order = null, $limit = null)
  {
    return (new Database('tb_motorista'))->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS, self::class);
  }

  /**
   * Método responsável por buscar uma vaga com base em seu ID
   * @param  integer $id
   * @return Motorista
   */
  public static function getMotorista($id)
  {
    return (new Database('tb_motorista'))->select('id = ' . $id)->fetchObject(self::class);
  }
}
