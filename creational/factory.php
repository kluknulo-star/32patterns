<?php

final class Developer
{
    public function work(): string
    {
        return 'coding';
    }

}

final class DeveloperFactory
{
    public static function make(): Developer
    {
        return new Developer();
    }
}

$developer = DeveloperFactory::make();
echo $developer->work() . PHP_EOL;