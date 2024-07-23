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
        $arrShift = [];
        foreach ($matrix as $rowSet) {
            // $min = array_search(min($rowSet),$rowSet).min($rowSet);
            $min = min($rowSet);
            foreach ($rowSet as $col => $data) {
                // $arrShift[$col] = array_column($matrix,$col);
                if ($min == max(array_column($matrix, $col)))
                    return [$min];
                // echo $col;
                // echo var_dump(array_column($matrix, $col));

                // echo max(array_column($matrix, $col)) == $data;
                // if (max(array_column($matrix, $col)) == $data) {
                //     echo $data;
                //     exit;
                // }
            }
        }


        // echo var_dump($b);
        // return $rowMin;
    }
}
// @lc code=end