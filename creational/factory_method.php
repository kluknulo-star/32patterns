<?php

interface Worker
{
    public function work(): string;
}

interface WorkerFactory
{
    public static function make(): Worker;
}

final class Developer implements Worker
{
    public function work(): string
    {
        return 'coding';
    }

}

final class Designer implements Worker
{
    public function work(): string
    {
        return 'design';
    }

}

final class DeveloperFactory implements WorkerFactory
{

    public static function make(): Worker
    {
        return new Developer();
    }
}

final class DesignerFactory implements WorkerFactory
{

    public static function make(): Worker
    {
        return new Designer();
    }
}



$developer = DeveloperFactory::make();
$designer = DesignerFactory::make();

echo $developer->work() . PHP_EOL;
echo $designer->work() . PHP_EOL;