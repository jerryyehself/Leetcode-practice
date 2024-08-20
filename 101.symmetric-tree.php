<?php
/*
 * @lc app=leetcode id=101 lang=php
 *
 * [101] Symmetric Tree
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

    /**
     * @param TreeNode $root
     * @return Boolean
     * 
     * answerd by @ordinary9843
     */
    function isSymmetric($root)
    {
        return $this->isMirror($root->left, $root->right);
    }

    function isMirror($left, $right)
    {
        // 兩側皆無
        if (!$left && !$right) return true;

        // 左不等於右
        if ($left->val !== $right->val) return false;

        // 左右各走一遍 進行遍歷
        return $this->isMirror($left->left, $right->right) && $this->isMirror($left->right, $right->left);
    }
}
// @lc code=end
