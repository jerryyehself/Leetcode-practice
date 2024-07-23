<?php
/*
 * @lc app=leetcode id=1 lang=php
 *
 * [1] Two Sum
 */

// @lc code=start
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {

        foreach ($nums as $key => $val) {
            foreach ($nums  as $key2 => $val2) {
                if (($key != $key2) && ($val + $val2 == $target))
                    return [$key, $key2];
            }
        }
    }
}
// @lc code=end
