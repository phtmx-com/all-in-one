<?php
declare(strict_types=1);

namespace App;

function component(string $name, array $data = []): void
{
    extract($data);
    require_once __DIR__ . "/../components/{$name}.php";
}