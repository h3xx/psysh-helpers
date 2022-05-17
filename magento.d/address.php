<?php

use Magento\Customer\Model\{
    Address,
    Customer,
};

function address(): Address {
    return di_new(Address::class);
}

function fake_address(Customer $customer = null): Address {
    if (is_null($customer)) {
        $customer = fake_customer();
    }
    $faker = faker();
    ($address = address())
        ->setCity($faker->city())
        ->setCompany($customer->getCompany())
        ->setCountryId($faker->countryCode())
        ->setCustomer($customer)
        ->setFax($faker->optional()->phoneNumber())
        ->setFirstname($customer->getFirstname())
        ->setLastname($customer->getLastname())
        ->setPostcode($faker->postcode())
        ->setStreet($faker->streetAddress())
        ->setTelephone($faker->phoneNumber())
        ;

    return $address;
}

function addr(...$args): Address {
    return fake_address(...$args);
}
