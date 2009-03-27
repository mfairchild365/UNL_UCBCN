<?php
/**
 * Table Definition for relatedevent
 *
 * PHP version 5
 *
 * @category  Events
 * @package   UNL_UCBCN
 * @author    Brett Bieber <brett.bieber@gmail.com>
 * @copyright 2009 Regents of the University of Nebraska
 * @license   http://www1.unl.edu/wdn/wiki/Software_License BSD License
 * @link      http://code.google.com/p/unl-event-publisher/
 */

/**
 * Require DB_DataObject to extend from it.
 */
require_once 'DB/DataObject.php';
/**
 * ORM for a record within the database.
 *
 * @package   UNL_UCBCN
 * @author    Brett Bieber <brett.bieber@gmail.com>
 * @copyright 2009 Regents of the University of Nebraska
 * @license   http://www1.unl.edu/wdn/wiki/Software_License BSD License
 * @link      http://code.google.com/p/unl-event-publisher/
 */
class UNL_UCBCN_Relatedevent extends DB_DataObject
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'relatedevent';                    // table name
    public $event_id;                        // int(10)  not_null unsigned
    public $related_event_id;                // int(10)  not_null unsigned
    public $relationtype;                    // string(100)  not_null

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('UNL_UCBCN_Relatedevent',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
    
    function table()
    {
        return array(
            'event_id'=>129,
            'related_event_id'=>129,
            'relationtype'=>2
        );
    }
    
    function links()
    {
        return array('event_id'         => 'event:id',
                     'related_event_id' => 'event:id');
    }
    
    function sequenceKey()
    {
        return array(false, false);
    }
}
