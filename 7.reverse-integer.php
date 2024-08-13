<?
/*
 * @lc app=leetcode id=7 lang=php
 *
 * [7] Reverse Integer
 */

// @lc code=start
class Solution
{

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x)
    {
        $ans = (int) strrev(abs($x));

        if ($x < 0)
            $ans *= -1;

        if (($ans > (2 ** 31 - 1)) || $ans < -2 ** 31)
            return 0;

        return $ans;
    }
}
// @lc code=end
