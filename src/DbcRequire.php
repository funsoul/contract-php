<?php

declare(strict_types=1);

namespace Contract;

use Doctrine\Common\Annotations\Annotation\Target;

/**
 * @Annotation
 * @Target({"METHOD"})
 */
class DbcRequire
{
    /**
     * @var string
     */
    public $condition;

    /**
     * @var string
     */
    public $callback;
}