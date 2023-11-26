<?php

interface Worker
{
    public function work(): string;
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

final class WorkerFactory
{
    public static function make(string $worker): ?Worker
    {
        if (class_exists($worker))
        {
            return new $worker();
        }

        return null;
    }
}


$developer = WorkerFactory::make('developer');
$designer = WorkerFactory::make('designer');

echo $developer->work() . PHP_EOL;
echo $designer->work() . PHP_EOL;