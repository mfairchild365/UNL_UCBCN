<?php
/**
 * Table Definition for role
 */
require_once 'DB/DataObject.php';

class UNL_UCBCN_Role extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'role';                            // table name
    public $id;                              // int(10)  not_null primary_key unsigned auto_increment
    public $name;                            // string(255)  not_null
    public $standard;                        // int(1)  

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('UNL_UCBCN_Role',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}