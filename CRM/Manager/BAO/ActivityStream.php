<?php
use CRM_Manager_ExtensionUtil as E;

class CRM_Manager_BAO_ActivityStream extends CRM_Manager_DAO_ActivityStream {

  /**
   * Create a new ActivityStream based on array-data
   *
   * @param array $params key-value pairs
   * @return CRM_Manager_DAO_ActivityStream|NULL
   *
  public static function create($params) {
    $className = 'CRM_Manager_DAO_ActivityStream';
    $entityName = 'ActivityStream';
    $hook = empty($params['id']) ? 'create' : 'edit';

    CRM_Utils_Hook::pre($hook, $entityName, CRM_Utils_Array::value('id', $params), $params);
    $instance = new $className();
    $instance->copyValues($params);
    $instance->save();
    CRM_Utils_Hook::post($hook, $entityName, $instance->id, $instance);

    return $instance;
  } */

}
