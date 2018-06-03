<?php

namespace Home\Model;

use Think\Model\RelationModel;
	class UserModel extends RelationModel{

     protected $_link=array(
       "group"=>array(
           "mapping_type"=>self::MANY_TO_MANY,
           "foreign_key"=>"uid",//中间表的字段
           "relation_foreign_key"=>"gid",//中间表的字段
           "relation_table"=>"mb_user_group"
       )
     );

 }
