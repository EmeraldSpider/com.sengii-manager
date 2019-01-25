<?php
use CRM_Manager_ExtensionUtil as E;

/**
 * SengiiGroup.Getdel API specification (optional)
 * This is used for documentation and validation.
 *
 * @param array $spec description of fields supported by this API call
 * @return void
 * @see http://wiki.civicrm.org/confluence/display/CRMDOC/API+Architecture+Standards
 */
//function _civicrm_api3_sengii_group_Getdel_spec(&$spec) {
//  $spec['magicword']['api.required'] = 1;
//}

/**
 * SengiiGroup.Getdel API
 *
 * @param array $params
 * @return array API result descriptor
 * @see civicrm_api3_create_success
 * @see civicrm_api3_create_error
 * @throws API_Exception
 */
function civicrm_api3_sengii_group_Getdel($params) {
  //get records dated before the date passed in
  $trimRecords = civicrm_api3("SengiiGroup","get",$params);
  
  //get ids for records for deletion
  foreach($trimRecords['values'] as $key => $value){
    $todelete[] = $value["id"];
  }
  
  //iterate through old records and delete them
  foreach($todelete as $id){
    $results = civicrm_api3("SengiiGroup","delete",array("id" => $id));
  }
  
  //get new records only to return
  $returnValues = civicrm_api3("SengiiGroup","get",array(
    "modified_date" => [">=" => array_pop($params['modified_date'])]
  ));
  
  return civicrm_api3_create_success($trimRecords, $params, 'SengiiGroup', 'Getdel');
  
  
  }
