<?php

namespace Home\Model;

use Think\Model\RelationModel;
	class UserModel extends RelationModel{

     protected $_link=array(
       "group"=>array(
           "mapping_type"=>self::MANY_TO_MANY,
           "foreign_key"=>"uid",//�м����ֶ�
           "relation_foreign_key"=>"gid",//�м����ֶ�
           "relation_table"=>"mb_user_group"
       )
     );

 }
