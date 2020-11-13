
# 🔥 Laravel Task
###  A simple way to trigger some specific task in a clean and simple way

[![GitHub Workflow Status](https://github.com/victor-falcon/laravel-task/workflows/Run%20tests/badge.svg)](https://github.com/victor-falcon/laravel-task/actions)
[![Packagist](https://img.shields.io/packagist/v/victor-falcon/laravel-task.svg)](https://packagist.org/packages/victor-falcon/laravel-task)
[![Packagist](https://poser.pugx.org/victor-falcon/laravel-task/d/total.svg)](https://packagist.org/packages/victor-falcon/laravel-task)
[![Packagist](https://img.shields.io/packagist/l/victor-falcon/laravel-task.svg)](https://packagist.org/packages/victor-falcon/laravel-task)

## Installation
Install via composer

```bash
composer require victor-falcon/laravel-task
```

## Usage
Create a simple task using:

```
artisan make:task Shop/CreateUserShop
```

> You can pass Shop/CreateUserShop to create the class in a sub-folder or just the task name. The default path is `app/Task`.

```php
<?php

declare(strict_types=1);

namespace App\Actions\Shop;

use VictorFalcon\LaravelTask\Task;
use VictorFalcon\LaravelTask\Taskable;

final class CreateUserShop implements Task
{
	use Taskable;

	private ShopCreator $creator;

	public function __construct(ShopCreator $creator)
	{
		$this->creator = $creator;
	}

	public function __invoke(User $user): Shop
	{
		// Create your shop
	}
}
```

and trigger it:

```php
$shop = CreateUserShop::trigger($user);
```

## Todo
- [X] Make simple task with dependency injection a simple way to trigger them
- [ ] Make Task chains to trigger a queue of tasks in sequence
- [X] Make a command to auto generate tasks
- [ ] Make a command to add IDE helper information to autocomplete params

## Credits
- [Víctor Falcón](https://github.com/victor-falcon)
- [All contributors](https://github.com/victor-falcon/laravel-task/graphs/contributors)

This package is bootstrapped with the help of
[melihovv/laravel-package-generator](https://github.com/melihovv/laravel-package-generator).
