<?php

<<<<<<< HEAD
namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }
}
=======
test('that true is true', function () {
    expect(true)->toBeTrue();
});
>>>>>>> upstream/main
