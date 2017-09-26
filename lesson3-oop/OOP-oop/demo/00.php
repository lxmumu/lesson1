<?php
/**
 * @Author: anchen
 * @Date:   2017-09-25 21:53:13
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-25 21:55:53
 */
 $data=array('xiaomin'=>'20','xiaohong'=>'15');
 $val="'".join("','",array_values($data));
 echo $val;