<?php

declare(strict_types=1);

if (PHP_SAPI != "cli") {
    exit("This is a CLI only tool");
}

echo "It works" . PHP_EOL;
