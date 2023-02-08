<?php
return array ( 'title' => array ( 'id' => '131', 'moduleid' => '13', 'field' => 'title', 'name' => '安全码', 'tips' => '', 'required' => '1', 'minlength' => '20', 'maxlength' => '20', 'pattern' => 'digits', 'errormsg' => '', 'class' => '', 'type' => 'title', 'setup' => 'array (
  \'thumb\' => \'0\',
  \'style\' => \'0\',
  \'size\' => \'\',
)', 'ispost' => '0', 'unpostgroup' => '', 'listorder' => '0', 'status' => '1', 'issystem' => '0', ), 'hits' => array ( 'id' => '132', 'moduleid' => '13', 'field' => 'hits', 'name' => '查询次数', 'tips' => '', 'required' => '1', 'minlength' => '0', 'maxlength' => '0', 'pattern' => '0', 'errormsg' => '', 'class' => '', 'type' => 'number', 'setup' => 'array (
  \'size\' => \'\',
  \'numbertype\' => \'1\',
  \'decimaldigits\' => \'0\',
  \'default\' => \'0\',
)', 'ispost' => '0', 'unpostgroup' => '', 'listorder' => '0', 'status' => '1', 'issystem' => '0', ), 'createtime' => array ( 'id' => '129', 'moduleid' => '13', 'field' => 'createtime', 'name' => '发布时间', 'tips' => '', 'required' => '1', 'minlength' => '0', 'maxlength' => '0', 'pattern' => '', 'errormsg' => '', 'class' => '', 'type' => 'datetime', 'setup' => '', 'ispost' => '0', 'unpostgroup' => '3,4', 'listorder' => '93', 'status' => '1', 'issystem' => '1', ), 'status' => array ( 'id' => '130', 'moduleid' => '13', 'field' => 'status', 'name' => '状态', 'tips' => '', 'required' => '0', 'minlength' => '0', 'maxlength' => '0', 'pattern' => '', 'errormsg' => '', 'class' => '', 'type' => 'radio', 'setup' => 'array (
  \'options\' => \'已审核|1
未审核|0\',
  \'fieldtype\' => \'tinyint\',
  \'numbertype\' => \'1\',
  \'labelwidth\' => \'75\',
  \'default\' => \'1\',
)', 'ispost' => '0', 'unpostgroup' => '3,4', 'listorder' => '99', 'status' => '1', 'issystem' => '1', ), ); ?>