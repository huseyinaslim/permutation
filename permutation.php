<?php
/**
 * Calculation Permute
 * @param  array $numbers Permutation numbers
 * @param  array $perms   Permutations
 * @return void
 * @source https://stackoverflow.com/posts/5506933/revisions
 */
function permute($numbers, $perms = []) {
    if (empty($numbers)) {
        print join(' ', $perms) . "\n";
    }  else {
        for ($i = count($numbers) - 1; $i >= 0; --$i) {
             $newitems = $numbers;
             $newperms = $perms;
             list($foo) = array_splice($newitems, $i, 1);
             array_unshift($newperms, $foo);
             permute($newitems, $newperms);
         }
    }
}
