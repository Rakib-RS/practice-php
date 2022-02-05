<?php

namespace Bookstore\Domain;

class Customer extends Person
{
    private static $lastId = 0;
    private $id;
    private $email;
    public function __construct(
        int $id,
        string $firstname,
        string $surname,
        string $email
    ) {
        if (empty($id)) {
            $this->id = ++self::$lastId;
        } else {
            $this->id = $id;
            if ($id > self::$lastId) {
                self::$lastId = $id;
            }
        }
        parent::__construct($firstname,$surname);
    }
    public static function getLastId(): int
    {
        return self::$lastId;
    }
    public function getId(): int
    {
        return $this->id;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function setEmail($email)
    {

        $this->email = $email;
    }
}
$customer = new Customer(1,'rakib','r','rakib@');
 $email = $customer->getEmail();
 echo $email;
