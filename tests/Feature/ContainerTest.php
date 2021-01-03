<?php
namespace WabLab\ContainerTest\Feature;

use PHPUnit\Framework\TestCase;
use WabLab\Container\Container;

class ContainerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDatetimeObjectCreation()
    {
        $di = new Container();
        $obj = $di->make(\DateTime::class);

        $this->assertTrue($obj instanceof \DateTime);
    }

}



