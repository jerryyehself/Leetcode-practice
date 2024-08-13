<?php
/*
 * @lc app=leetcode id=9 lang=php
 *
 * [9] Palindrome Number
 */

// @lc code=start
class Solution
{

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x)
    {
        return (int)strrev($x) === $x;
    }
}
// @lc code=end
