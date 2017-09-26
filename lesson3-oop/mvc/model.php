<?php
/**
 * @Author: anchen
 * @Date:   2017-09-23 15:51:28
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-23 15:58:45
 */
class DateTimeModel{
    function GetDate()
    {
      return Date('H:i:s');
    }
     function GetDateTime()
    {
      return Date('Y/m/d H:i:s');
    }
      function GetTime()
    {
      return Date('Y-m-d');
    }
}