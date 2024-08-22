<?php
/*
 * @lc app=leetcode id=13 lang=php
 *
 * [13] Roman to Integer
 */

// @lc code=start
class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s)
    {
        $map = [
            'M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1,
        ];

        $num = 0;
        while ($s != '') {
            $sub = substr($s, 0, 2);

            if (!$map[$sub])
                $sub = substr($s, 0, 1);

            $num += $map[$sub];
            $s = substr($s, strlen($sub));
        }

        return $num;
    }
}
// @lc code=end
