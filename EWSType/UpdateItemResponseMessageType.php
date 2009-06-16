<?php
/**
 * Definition of the UpdateItemResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the UpdateItemResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_UpdateItemResponseMessageType {
	/**
	 * ConflictResults property
	 * 
	 * @var EWSType_ConflictResultsType
	 */
	public $ConflictResults;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'ConflictResults',
				'required' => false,
				'type' => 'ConflictResultsType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class UpdateItemResponseMessageType