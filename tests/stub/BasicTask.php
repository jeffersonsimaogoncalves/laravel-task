<?php

declare(strict_types=1);

namespace VictorFalcon\LaravelTask\Tests\stub;

use VictorFalcon\LaravelTask\Task;
use VictorFalcon\LaravelTask\Taskable;

class BasicTask extends Task
{
    use Taskable;

    private bool $input;

    public function __construct(bool $input)
    {
        $this->input = $input;
    }

    public function handle(): bool
    {
        return $this->input;
    }
}
