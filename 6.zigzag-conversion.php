<?php
/*
 * @lc app=leetcode id=6 lang=php
 *
 * [6] Zigzag Conversion
 */

// @lc code=start
class Solution
{

    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     * 
     * +1+1+1
     * 
     * PYA +2/+0 (2-1)*2/(2-0)*2
     * APL +0/+2 
     * 
     * P A H N +4/+0 (3-1)*2 / (3-3)*2
     * APLSIIG +2/+2 (3-2)*2 / (3-2)*2
     * Y I R   +0/+4 (3-3)*2 / (3-1)*2
     * 
     * P  I  N +6/+0 (4-1)*2 / (4-4)*2
     * A LS IG +4/+2 (4-2)*2 / (4-3)*2
     * YA HR   +2/+4 (4-3)*2 / (4-2)*2
     * P  I    +0/+6 (4-4)*2 / (4-1)*2
     */
    function convert($s, $numRows)
    {

        // 下一字元最大間隔
        $interv = $numRows + 1;

        // 每個row的字串
        for ($i = 1; $i <= $numRows; $i++) {

            // index從0開始
            $curr = $i - 1;

            // 下一字元
            $next = $interv - $i;

            // row字元迴圈
            while ($s[$curr]) {

                // 避免指針讀到同一位置
                if ($curr !== $pointer)
                    $newS .= $s[$curr];

                // 更新指針
                $pointer = $curr;

                // 移至下一目標字元，至少要移動一個字元
                $curr += ($numRows > 1) ? ($numRows - ($interv - $next)) * 2 : 1;

                // 移到下兩字元的間隔大小
                $next = $interv - $next;
            }
        }

        return $newS;
    }
}
// @lc code=end
