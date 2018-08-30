<?php

/* 
 * 获取文件扩展名
 * @param string $filename
 * @return string 
 */

function getExt($filename)
{
    return strtolower(pathinfo($filename,PATHINFO_EXTENSION));   
}
