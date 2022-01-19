<?php

namespace Bookstore\Domain;

interface Customer {
    public function getMonthlyFee(): float; 
   public function getAmountToBorrow(): int;
    public function getType(): string; 
}

abstract class Customer extends Person {
private static $lastId = 0;
private $id;
private $email;

public function __construct( int $id, string $firstname, string $surname, string $email ) {
    parent::__construct($firstname, $surname);
    if (empty($id)) {
    $this->id = ++self::$lastId;
    } else {
    $this->id = $id;
    if ($id > self::$lastId) {
    self::$lastId = $id;
    }
    }
    $this->email = $email;
    }
    function checkIfValid(Customer $customer, array $books): bool { 
        return $customer->getAmountToBorrow() >= count($books); 
    }
    public function pay(float $amount) {
        echo "Paying $amount.";
    }
    public function isExtentOfTaxes(): bool {
        return false;
    }
    
}    
$customer1 = new Basic(5, 'John', 'Doe', 'johndoe@mail.com'); var_dump(checkIfValid($customer1, [$book1])); // ok
$customer2 = new Customer(7, 'James', 'Bond', 'james@bond.com'); var_dump(checkIfValid($customer2, [$book1])); // fails
