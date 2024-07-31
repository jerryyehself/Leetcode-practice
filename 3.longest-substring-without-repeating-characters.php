<?php
/*
 * @lc app=leetcode id=3 lang=php
 *
 * [3] Longest Substring Without Repeating Characters
 */

// @lc code=start
class Solution
{

    /**
     * @param String $s
     * @return Integer
     * 
     * answerd by @darian-catalin-cucer
     * 
     * 比如pwwekw
     * 在第二個w的時候
     * arr['w']更新為2且大於原start 1
     * length維持1
     * 因符合if條件else if段不會執行
     * e的時候才執行elseif
     * 
     * 就算子字串中有子字串也不會影響最長子字串
     */
    function lengthOfLongestSubstring($s)
    {
        // 起點指針
        $start = 0;
        // 子字串長度  
        $length = 0;
        // 所有位置字母跑一次
        for ($i = 0; $i < strlen($s); $i++) {
            // 指針字母
            $char = $s[$i];
            // 若字母存在於子字串暫存陣列 且 子字串長度大於等於起點指針位置 起點指針後推一位
            // 若指針當前位置 減去起點指針位置等於子字串長度 則長度加一
            if (isset($arr[$char]) && $arr[$char] >= $start) {
                $start = $arr[$char] + 1;
            } elseif ($i - $start === $length) {
                $length++;
            }
            // 更新子字串位置陣列
            $arr[$char] = $i;
        }
        return $length;
    }
}
// @lc code=end
