<?php
//000000000000
 exit();?>
a:9:{s:2:"id";a:7:{s:4:"name";s:2:"id";s:4:"type";s:7:"int(11)";s:7:"notnull";b:0;s:7:"default";N;s:7:"primary";b:1;s:7:"autoinc";b:1;s:7:"comment";s:0:"";}s:3:"uid";a:7:{s:4:"name";s:3:"uid";s:4:"type";s:4:"text";s:7:"notnull";b:0;s:7:"default";N;s:7:"primary";b:0;s:7:"autoinc";b:0;s:7:"comment";s:48:"接收消息的用户id（类型：json数据）";}s:4:"type";a:7:{s:4:"name";s:4:"type";s:4:"type";s:10:"tinyint(1)";s:7:"notnull";b:0;s:7:"default";s:1:"1";s:7:"primary";b:0;s:7:"autoinc";b:0;s:7:"comment";s:59:"消息通知类型（1：系统消息；2：用户通知）";}s:4:"user";a:7:{s:4:"name";s:4:"user";s:4:"type";s:11:"varchar(20)";s:7:"notnull";b:0;s:7:"default";s:0:"";s:7:"primary";b:0;s:7:"autoinc";b:0;s:7:"comment";s:9:"发送人";}s:5:"title";a:7:{s:4:"name";s:5:"title";s:4:"type";s:11:"varchar(20)";s:7:"notnull";b:0;s:7:"default";N;s:7:"primary";b:0;s:7:"autoinc";b:0;s:7:"comment";s:27:"通知消息的标题信息";}s:7:"content";a:7:{s:4:"name";s:7:"content";s:4:"type";s:12:"varchar(500)";s:7:"notnull";b:0;s:7:"default";s:0:"";s:7:"primary";b:0;s:7:"autoinc";b:0;s:7:"comment";s:21:"通知消息的内容";}s:8:"add_time";a:7:{s:4:"name";s:8:"add_time";s:4:"type";s:7:"int(11)";s:7:"notnull";b:0;s:7:"default";s:1:"0";s:7:"primary";b:0;s:7:"autoinc";b:0;s:7:"comment";s:27:"通知消息发送的时间";}s:7:"is_send";a:7:{s:4:"name";s:7:"is_send";s:4:"type";s:10:"tinyint(1)";s:7:"notnull";b:0;s:7:"default";s:1:"0";s:7:"primary";b:0;s:7:"autoinc";b:0;s:7:"comment";s:47:"是否发送（0：未发送；1：已发送）";}s:9:"send_time";a:7:{s:4:"name";s:9:"send_time";s:4:"type";s:7:"int(11)";s:7:"notnull";b:0;s:7:"default";N;s:7:"primary";b:0;s:7:"autoinc";b:0;s:7:"comment";s:12:"发送时间";}}