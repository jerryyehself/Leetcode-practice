<?
/*
 * @lc app=leetcode id=2 lang=php
 *
 * [2] Add Two Numbers
 */

// @lc code=start

// Definition for a singly-linked list.
// class ListNode
// {
//     public $val = 0;
//     public $next = null;
//     function __construct($val = 0, $next = null)
//     {
//         $this->val = $val;
//         $this->next = $next;
//     }
// }

class Solution
{

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     * 
     * @fdc_hadrian answerd
     * 
     * 
     */
    function addTwoNumbers($l1, $l2)
    {
        //假開頭，只要取next而已 
        $dummyHead = new ListNode;
        //指針
        $current = $dummyHead;
        //進位承載
        $carry = 0;
        while ($l1 !== null || $l2 !== null) {

            //兩串當前節點
            $x = ($l1 !== null) ? $l1->val : 0;
            $y = ($l2 !== null) ? $l2->val : 0;

            //當前節點加上進位承載
            $sum = $x + $y + $carry;

            //更新進位承載
            $carry = (int)($sum / 10);

            //下一節點(取餘數)
            $current->next = new ListNode($sum % 10);

            //更新指針
            $current = $current->next;
            if ($l1 !== null) $l1 = $l1->next;
            if ($l2 !== null) $l2 = $l2->next;
        }

        //最尾端若有進位多一個next
        if ($carry > 0) {
            $current->next = new ListNode($carry);
        }

        return $dummyHead->next;
    }

    /**
     * @Caaat1 answerd
     * 
     * function addTwoNumbers($l1, $l2)
     * {
     *    // 靜態成員(進位承載用)
     *    static $sum;
     *    // 當前節點
     *    $sum += $l1?->val + $l2?->val;
     *    // 當前節點有值
     *    if ($l1 or $l2 or $sum) {
     *       // 取當前節點值
     *       $mod = $sum % 10;
     *       // 更新進位承載(取總和減去餘數的商，即取十位數)
     *       $sum = ($sum - $mod) / 10;
     *       // 進入下一節點
     *       return new ListNode($mod, (__METHOD__)($l1?->next, $l2?->next));
     *   }
     * }
     * 
     * 
     * 
     */
}
// @lc code=end
