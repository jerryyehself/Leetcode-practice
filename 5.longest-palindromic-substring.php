<?php
/*
 * @lc app=leetcode id=5 lang=php
 *
 * [5] Longest Palindromic Substring
 */

// @lc code=start
class Solution
{

    /**
     * @param String $s
     * @return String
     * 
     * answerd by @vanAmsen
     * 
     * 相關演算法：Manacher
     * 
     */
    function longestPalindrome($s)
    {
        // 加入分隔符號，確保字串為奇數(2n+1)
        $sep = '#';
        $trans = $sep . implode($sep, str_split($s)) . $sep;

        // 新字串長度
        $tempLen = strlen($trans);

        // 建立LPS(迴文半徑)陣列，值為該字元左右延伸字串相同的長度
        $LPS = array_fill(0, $tempLen, 0);

        // 預設半徑中間點等於右界
        $center = $rightLimit = 0;

        // 填充LSP
        for ($i = 1; $i <= $tempLen; $i++) {

            // 若右界大於當前字元位置，則擇右界減當前位置，或LPS中中間點*2減當前位置(即左側鏡像位置)的最小值
            // 因為右界以外無法確認，左界則為已確認，無法保證左邊鏡像之半徑一定等於右邊鏡像半徑，右邊可能超過或小於左邊鏡像位置的半徑值
            // 但由於對稱的關係，左邊鏡像位置半徑若小於右界減去當前位置的長度(即右邊加上半徑也不會觸及當前右界)，則至少也會有對應位置的長度，反之則至少會有當前位置觸及右界的長度
            // 而右界是基於已知LPS建立故為已知．因而取右界減當前位置或左側鏡像位置兩者之最小值為暫估值

            // 目標在於減少建立LPS的時間
            $LPS[$i] = ($rightLimit > $i) ? min($rightLimit - $i, $LPS[2 * $center - $i]) : 0;

            // 當當前位置的右邊位置加上當前位置LPS的暫估值之字元，等於當前位置左邊位置減去當前位置LPS的暫估值之字元，更新當前位置的LPS，直到左右不同為止
            while ($trans[$i + 1 + $LPS[$i]] == $trans[$i - 1 - $LPS[$i]])
                $LPS[$i]++;

            // 若當前位置加上LPS半徑超過右界，則更新中間點為當前位置，右界為當前墜加上半徑
            if ($i + $LPS[$i] > $rightLimit) {
                $center = $i;
                $rightLimit = $i + $LPS[$i];
            }
        }

        // 建立完LPS後取半徑最大者之位置，並以左右半徑為起終點取字串即為答案
        $max_len = max($LPS);
        $center_index = array_search($max_len, $LPS);
        return substr($s, ($center_index - $max_len) / 2, $max_len);
    }
}
// @lc code=end
