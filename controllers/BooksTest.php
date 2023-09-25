<?php

include_once 'Books.php';

class BooksTest extends PHPUnit_Framework_TestCase
{

    public function test__construct()
    {

    }

    public function testGetList()
    {

        $o = new Books();

        $this->assertEquals('hello', $o->getList());

    }
}
