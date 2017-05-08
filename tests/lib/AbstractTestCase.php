<?php

namespace Improv\Cryptography\Test;

use PHPUnit\Framework\TestCase;

abstract class AbstractTestCase extends TestCase
{

    protected function getFullMock($class_name)
    {

        return $this->getMockBuilder($class_name)
            ->disableOriginalConstructor()
            ->getMock();
    }
}
