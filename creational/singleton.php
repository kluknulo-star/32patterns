<?php

final class Connection
{
    private static ?self $connection = null;

    private string $name;

    private function __construct()
    {
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public static function getInstance(): self
    {
        if (self::$connection === null){
            self::$connection = new Connection();
        }

        return self::$connection;
    }

    private function __clone()
    {
    }
}

$dbKirill = Connection::getInstance();
$dbKirill->setName('Kirill');

$dbMefody = Connection::getInstance();
$dbMefody->setName('Mefody');

echo $dbKirill->getName();