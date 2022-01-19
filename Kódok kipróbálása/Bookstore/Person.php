<?php
namespace Bookstore\Domain;

use Bookstore\Utils\Unique;

//Tulajdonságok
class Person {

    use Unique;

    protected $firstname;
    protected $surname;
    protected $email;

    public function __construct(
            int $id,
            string $firstname,
            string $surname,
            string $email
    ) {
        $this->firstname = $firstname;
        $this->surname = $surname;
        $this->email = $email;
        $this->setId($id);
    }

    public function getFirstname(): string {
        return $this->firstname;
    }

    public function getSurname(): string {
        return $this->surname;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }

}

/*
  //Az öröklődés bemutatása
  namespace Bookstore\Domain;
  class Person {
  private static $lastId = 0;
  protected $id;
  protected $firstname;
  protected $surname;
  protected $email;
  public function __construct( int $id, string $firstname, string $surname, string $email ) {
  $this->firstname = $firstname;
  $this->surname = $surname;
  $this->email = $email;
  if (empty($id)) {
  $this->id = ++self::$lastId;
  } else {
  $this->id = $id;
  if ($id > self::$lastId) {
  self::$lastId = $id;
  }
  }
  }
  public function getFirstname(): string {
  return $this->firstname;
  }
  public function getSurname(): string {
  return $this->surname;
  }
  public static function getLastId(): int {
  return self::$lastId;
  }
  public function getId(): int {
  return $this->id;
  }
  public function getEmail(): string {
  return $this->email;
  }
  } */

    
