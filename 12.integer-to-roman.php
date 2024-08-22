<?php
/*
 * @lc app=leetcode id=12 lang=php
 *
 * [12] Integer to Roman
 * 
 * @better answer by @ovaunit
 * 
 * 字典可讀性較佳，遞減即可當作餘數
 */

// @lc code=start
class Solution
{

    /**
     * @param Integer $num
     * @return String
     */
    function intToRoman($num)
    {
        // $roman = '';
        // for ($i = 1; $i <= floor($num / 1000); $i++) {
        //     $roman .= 'M';
        // }
        // $num %= 1000;
        // if ($num % 500 < 400) {
        //     // echo $num % 500;

        //     if ($num >= 500) {
        //         $roman .= 'D';
        //         $num -= 500;
        //     }
        //     for ($i = 1; $i <= floor($num / 100); $i++) {
        //         $roman .= 'C';
        //     }
        // } else {
        //     $roman .= ($num / 500 > 1) ? 'CM' : 'CD';
        // }
        // $num %= 100;
        // if ($num % 50 < 40) {

        //     if ($num >= 50) {
        //         $roman .= 'L';
        //         $num -= 50;
        //     }
        //     for ($i = 1; $i <= floor($num / 10); $i++) {
        //         $roman .= 'X';
        //     }
        // } else {
        //     $roman .= ($num / 50 > 1) ? 'XC' : 'XL';
        // }
        // $num %= 10;
        // if ($num % 5 < 4) {
        //     if ($num >= 5) {
        //         $roman .= 'V';
        //         $num -= 5;
        //     }
        //     for ($i = 1; $i <= $num; $i++) {
        //         $roman .= 'I';
        //     }
        // } else {
        //     $roman .= ($num / 5 > 1) ? 'IX' : 'IV';
        // }
        // return $roman;
        $map = [
            1000 => 'M',
            900 => 'CM',
            500 => 'D',
            400 => 'CD',
            100 => 'C',
            90 => 'XC',
            50 => 'L',
            40 => 'XL',
            10 => 'X',
            9 => 'IX',
            5 => 'V',
            4 => 'IV',
            1 => 'I',
        ];

        $str = '';
        while ($num > 0) {
            foreach ($map as $mn => $s) {
                if ($mn <= $num) {
                    $str .= $s;
                    $num -= $mn;
                    break;
                }
            }
        }

        return $str;
    }
}
// @lc code=end
