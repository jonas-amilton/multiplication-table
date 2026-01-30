<?php

use Jonas\MultiplicationTable\MultiplicationTable;
use PHPUnit\Framework\TestCase;

final class MultiplicationTableTest extends TestCase
{
    public function test_generate_table(): void
    {
        $result = MultiplicationTable::generate(5, 3);

        $this->assertSame([
            1 => 5,
            2 => 10,
            3 => 15,
        ], $result);
    }

    public function test_format_table(): void
    {
        $result = MultiplicationTable::format(2, 3);

        $this->assertSame([
            '2 x 1 = 2',
            '2 x 2 = 4',
            '2 x 3 = 6',
        ], $result);
    }

    public function test_invalid_limit_throws_exception(): void
    {
        $this->expectException(InvalidArgumentException::class);
        MultiplicationTable::generate(5, 0);
    }
}
