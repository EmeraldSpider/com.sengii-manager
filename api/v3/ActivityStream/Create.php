<?php
use CRM_Manager_ExtensionUtil as E;

/**
 * ActivityStream.Create API specification (optional)
 * This is used for documentation and validation.
 *
 * @param array $spec description of fields supported by this API call
 * @return void
 * @see http://wiki.civicrm.org/confluence/display/CRMDOC/API+Architecture+Standards
 */
function civicrm_api3_activity_stream_Create($params) {
  return _civicrm_api3_basic_create(_civicrm_api3_get_BAO(__FUNCTION__), $params, TRUE, 'ActivityStream');
}
