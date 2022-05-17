<?php

use Magento\Customer\Model\Customer;

function customer(): Customer {
    return di_new(Customer::class);
}

function fake_customer(): Customer {
    $faker = faker();
    ($customer = customer())
        ->setCompany($faker->optional()->company())
        ->setEmail($faker->email())
        ->setFirstname($faker->firstName())
        ->setLastname($faker->lastName())
        ->setMiddlename($faker->optional()->firstName())
        ->setPrefix($faker->optional()->title())
        ;

    return $customer;
}

function cust(): Customer {
    return fake_customer();
}
