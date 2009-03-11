<?php
/**
 * Table Definition for event_has_eventtype
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
 * @category  Events
 * @package   UNL_UCBCN
 * @author    Brett Bieber <brett.bieber@gmail.com>
 * @copyright 2009 Regents of the University of Nebraska
 * @license   http://www1.unl.edu/wdn/wiki/Software_License BSD License
 * @link      http://code.google.com/p/unl-event-publisher/
 */
class UNL_UCBCN_Event_has_eventtype extends DB_DataObject
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'event_has_eventtype';             // table name
    public $id;                              // int(10)  not_null primary_key unsigned auto_increment
    public $event_id;                        // int(10)  not_null multiple_key unsigned
    public $eventtype_id;                    // int(10)  not_null multiple_key unsigned

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('UNL_UCBCN_Event_has_eventtype',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
    
    public $fb_hiddenFields         = array('event_id');
    public $fb_excludeFromAutoRules = array('event_id');
    public $fb_fieldLabels          = array('eventtype_id'=>'Event Type');
    public $fb_addFormHeader        = false;
    public $fb_formHeaderText       = 'Event Type';
    
    function table()
    {
        return array(
            'id'=>129,
            'event_id'=>129,
            'eventtype_id'=>129,
        );
    }

    function keys()
    {
        return array(
            'id',
        );
    }
    
    function sequenceKey()
    {
        return array('id',true);
    }
    
    function links()
    {
        return array('event_id'     => 'event:id',
                     'eventtype_id' => 'eventtype:id');
    }
    
    /**
     * Called before the form is generated.
     *
     * @param object &$fb Formbuilder object.
     *
     * @return void
     */
    public function preGenerateForm(&$fb)
    {
        foreach ($this->fb_hiddenFields as $el) {
            $this->fb_preDefElements[$el] = HTML_QuickForm::createElement('hidden', $fb->elementNamePrefix.$el.$fb->elementNamePostfix);
        }
    }
    
    /**
     * Called before the form is processed to modify values submitted.
     *
     * @param array  &$values      Associative array of values submitted.
     * @param object &$formBuilder Formbuilder object.
     *
     * @return void
     */
    public function preProcessForm(&$values, &$formBuilder)
    {
        // Capture event_id foreign key if needed.
        if (isset($GLOBALS['event_id'])) {
            $values['event_id'] = $GLOBALS['event_id'];
        }
    }
}
