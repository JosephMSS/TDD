<?php

namespace Tests\Unit\Helpers;

use phpDocumentor\Reflection\Types\This;
use PHPUnit\Framework\TestCase;
use App\Helpers\Email;
class EmailTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_Email()
    {
        $email='i@email.com';
        $result=Email::validate($email);
        $this->assertTrue($result);
    }
}
