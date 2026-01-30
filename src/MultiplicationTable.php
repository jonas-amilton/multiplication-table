<?php

namespace Jonas\MultiplicationTable;

use InvalidArgumentException;

final class MultiplicationTable
{
    /**
     * Generates the multiplication table for a number.
     *
     * @param int $number Base number for the multiplication table
     * @param int $limit Number of multiplications (default 10)
     * @return array<int, int>
     */
    public static function generate(int $number, int $limit = 10): array
    {
        if ($limit <= 0) {
            throw new InvalidArgumentException('Limit must be greater than zero.');
        }

        $table = [];

        for ($i = 1; $i <= $limit; $i++) {
            $table[$i] = $number * $i;
        }

        return $table;
    }

    /**
     * Returns the multiplication table formatted as strings.
     *
     * Ex: "5 x 2 = 10"
     */
    public static function format(int $number, int $limit = 10): array
    {
        $raw = self::generate($number, $limit);
        $formatted = [];

        foreach ($raw as $i => $result) {
            $formatted[] = "{$number} x {$i} = {$result}";
        }

        return $formatted;
    }
}
