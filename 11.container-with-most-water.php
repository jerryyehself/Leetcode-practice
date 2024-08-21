<?php
/*
 * @lc app=leetcode id=11 lang=php
 *
 * [11] Container With Most Water
 */

// @lc code=start
class Solution
{

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height)
    {
        $max = 0;
        $left = 0;
        $right = count($height) - 1;

        while ($left < $right) {
            $width = $right - $left;
            $currentHeight = min($height[$left], $height[$right]);
            $max = max($max, $currentHeight * $width);

            ($height[$left] < $height[$right]) ? $left++ : $right--;
        }

        return $max;
    }
}
// @lc code=end
