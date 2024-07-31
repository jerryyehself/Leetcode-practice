<?
/*
 * @lc app=leetcode id=4 lang=php
 *
 * [4] Median of Two Sorted Arrays
 */

// @lc code=start
class Solution
{

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2)
    {
        // 合併陣列

        // foreach ($nums2 as $num2Sub) {
        //     $nums1[] = $num2Sub;
        // }

        array_walk($nums2, function ($num2) use (&$nums1) {
            $nums1[] = $num2;
        });

        $targetArr = $nums1;

        // 計算元素數量
        $arrLen = count($nums1);

        // 排序
        sort($targetArr);

        // 取中位key
        $mid = floor($arrLen / 2);

        // 偶數個元素要相加除二
        return ($arrLen % 2) ? $targetArr[$mid] : ($targetArr[$mid] + $targetArr[$mid - 1]) / 2;
    }
}
// @lc code=end
