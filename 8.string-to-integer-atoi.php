<?php
/*
 * @lc app=leetcode id=8 lang=php
 *
 * [8] String to Integer (atoi)
 */

// @lc code=start
class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function myAtoi($s)
    {
        $s = trim($s);
        for ($i = 0; $i < strlen($s); $i++) {
            if (!is_numeric($s[$i]) && $s[$i] != "+" && $s[$i] != "-") break;
            $n .= $s[$i];
        }

        $n = (int)$n;
        if ($n < -2147483648) return -2147483648;
        if ($n > 2147483647) return 2147483647;
        return $n;
    }
}
// @lc code=end
