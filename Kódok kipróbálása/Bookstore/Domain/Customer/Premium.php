<?php
//Absztrakt osztályok
namespace Bookstore\Domain\Customer;

        use Bookstore\Domain\Customer;
        use Bookstore\Domain\Person;

        class Premium extends Person Implements Customer {

            public function getMonthlyFee(): float {
                return 10.0;
            }

            public function getAmountToBorrow(): int {
                return 10;
            }

            public function getType(): string {
                return 'Premium';
            }

            public function pay(float $amount) {
                echo "Paying $amount.";
            }

            public function isExtentOfTaxes(): bool {
                return true;
            }

        }

        $customer1 = new Basic(5, 'John', 'Doe', 'johndoe@mail.com');
        var_dump(checkIfValid($customer1, [$book1])); // ok
        $customer2 = new Customer(7, 'James', 'Bond', 'james@bond.com');
        var_dump(checkIfValid($customer2, [$book1])); // fails



    