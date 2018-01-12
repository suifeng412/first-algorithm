<?php

/*class TreeNode{
    var $val;
    var $left = NULL;
    var $right = NULL;
    function __construct($val){
        $this->val = $val;
    }
}*/
function reConstructBinaryTree($pre, $vin)
{
    if($pre && $vin){
        $treeRoot = new TreeNode($pre[0]);
        $index = array_search($pre[0],$vin);
        $treeRoot->left = reConstructBinaryTree(array_slice($pre,1,$index),array_slice($vin,0,$index));
        $treeRoot->right = reConstructBinaryTree(array_slice($pre,$index+1),array_slice($vin,$index+1));
        return $treeRoot;
    }
 
}