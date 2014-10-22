<?php
App::uses('AppModel', 'Model');
/**
 * EventsTheme Model
 *
 * @property Events $Events
 * @property Themes $Themes
 */
class EventsTheme extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Events' => array(
			'className' => 'Events',
			'foreignKey' => 'events_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Themes' => array(
			'className' => 'Themes',
			'foreignKey' => 'themes_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
