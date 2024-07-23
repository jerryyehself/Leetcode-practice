<?php
/*
* @lc app=leetcode id=1380 lang=php
*
* [1380] Lucky Numbers in a Matrix
*/

// @lc code=start
class Solution
{

    /**
     * @param Integer[][] $matrix
     * @return Integer[]
     */
    function luckyNumbers($matrix)
    {
        $luckNums = [];
        foreach ($matrix as $rowSet) {
            //取row最小
            $min = min($rowSet);

            //取num最大
            foreach ($rowSet as $col => $data) {
                if ($min == max(array_column($matrix, $col)))
                    $luckNums[] = $min;
            }
        }
        return $luckNums;
    }
}
// @lc code=end