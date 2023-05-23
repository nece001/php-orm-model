<?php

namespace Nece001\PhpOrmModel\Interfaces;

use ArrayAccess;
use Countable;
use IteratorAggregate;
use JsonSerializable;
use think\contract\Arrayable;
use think\contract\Jsonable;

interface Collection extends ArrayAccess, Countable, IteratorAggregate, JsonSerializable, Arrayable, Jsonable
{
}
