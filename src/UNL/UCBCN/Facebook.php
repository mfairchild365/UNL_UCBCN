<?php 
/**
 * Facebook integration class (db).
 * 
 * PHP version 5
 * 
 * @category  Events 
 * @package   UNL_UCBCN
 * @author    Michael Fairchild <mfairchild365@gmail.com>
 * @copyright 2010 Regents of the University of Nebraska
 * @license   http://www1.unl.edu/wdn/wiki/Software_License BSD License
 * @link      http://code.google.com/p/unl-event-publisher/
 *
 * TODO: Create JSON encoded Location info for Facebook.
 * TODO: Add support for added to pages instead of just profiles.
 */

/**
 * Require DB_DataObject to extend from it, as well as the backend UNL_UCBCN.
 */
require_once 'DB/DataObject.php';
require_once 'UNL/UCBCN.php';

/**
 * Facebook integration class (db).
 * This class contains the table structor and methods for the php pear
 * DBobject class.
 * 
 * @category  Events 
 * @package   UNL_UCBCN
 * @author    Michael Fairchild <mfairchild365@gmail.com>
 * @copyright 2010 Regents of the University of Nebraska
 * @license   http://www1.unl.edu/wdn/wiki/Software_License BSD License
 * @link      http://code.google.com/p/unl-event-publisher/
 */
class UNL_UCBCN_Facebook extends DB_DataObject
{
    //DB table and cols.
    public $__table = 'facebook';
    public $facebook_id;
    public $eventdatetime_id;
    public $calendar_id;
    public $page_name;
    

    
    //Static get for DB
    function staticGet($k,$v=null)
    {
        return DB_DataObject::staticGet('UNL_UCBCN_Facebook', $k, $v);
    }
    
    /** keys for the db table.
     * 
     *  @return The array containing a list of keyes used in the DB table.
     **/
    function keys()
    {
        return array(
        );
    }
    
    /** links for the db table.
     * 
     *  @return An array containing a list of linked fields in the db.
     **/
    function links()
    {
        return array('eventdatetime_id'    => 'eventdatetime:id');
    }
    
    /** Table Stucture for the DB..
     * 
     *  @return An array containing the DB structure.
     **/
    function table()
    {
        return array(
            'facebook_id'=>129,
            'eventdatetime_id'=>129,
            'calendar_id'=>129,
            'page_name'=>130,
        );
    }
    
}