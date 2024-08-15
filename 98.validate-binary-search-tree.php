<?php
/*
 * @lc app=leetcode id=98 lang=php
 *
 * [98] Validate Binary Search Tree
 */

// @lc code=start
/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution
{
    // public $rootVal = 0;
    /**
     * @param TreeNode $root
     * @return Boolean
     * 
     * answerd by @egorgrishin
     * 
     * 加上最大最小參數(右邊恆大，左邊恆小)
     * 回傳true的時機：
     * 1.左右皆無
     * 2.左邊或右邊有時把有的節點都各自跑一遍
     */
    public function isValidBST($root, $min = null, $max = null)
    {
        return $root === null || (
            ($min === null || $root->val > $min) &&
            ($max === null || $root->val < $max) &&
            $this->isValidBST($root->left, $min, $root->val) &&
            $this->isValidBST($root->right, $root->val, $max)
        );
    }
}
// @lc code=end
