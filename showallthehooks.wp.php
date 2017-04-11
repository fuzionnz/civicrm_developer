<?php
/**
 * @file
 * This file is generated automatically. It contains example implementations of
 * all core CiviCRM hooks in WordPress. You can edit it to enable additional
 * debug on any hook.
 *
 * To regenerate, see README.md or https://github.com/fuzionnz/contrib.showallthehooks
 */


/**
   * This hook is called when composing the ACL where clause to restrict
   * visibility of contacts to the logged in user
   *
   * @param int $type
   *   The type of permission needed.
   * @param int $contactID
   *   The contactID for whom the check is made.
   * @param string $tableName
   *   The tableName which is being permissioned.
   * @param array $allGroups
   *   The set of all the objects for the above table.
   * @param array $currentGroups
   *   The set of objects that are currently permissioned for this contact.
   *
   * @return null
   *   the return value is ignored
   */
function wp_callback_for_civicrm_aclGroup($type, $contactID, $tableName, &$allGroups, &$currentGroups) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_aclGroup', 'wp_callback_for_civicrm_aclGroup', 10, 5);

/**
   * This hook is called when composing the ACL where clause to restrict
   * visibility of contacts to the logged in user
   *
   * @param int $type
   *   The type of permission needed.
   * @param array $tables
   *   (reference ) add the tables that are needed for the select clause.
   * @param array $whereTables
   *   (reference ) add the tables that are needed for the where clause.
   * @param int $contactID
   *   The contactID for whom the check is made.
   * @param string $where
   *   The currrent where clause.
   *
   * @return null
   *   the return value is ignored
   */
function wp_callback_for_civicrm_aclWhereClause($type, &$tables, &$whereTables, &$contactID, &$where) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_aclWhereClause', 'wp_callback_for_civicrm_aclWhereClause', 10, 5);

/**
   * This hook is called when API permissions are checked (cf. civicrm_api3_api_check_permission()
   * in api/v3/utils.php and _civicrm_api3_permissions() in CRM/Core/DAO/permissions.php).
   *
   * @param string $entity
   *   The API entity (like contact).
   * @param string $action
   *   The API action (like get).
   * @param array &$params the API parameters
   * @param array &$permissions the associative permissions array (probably to be altered by this hook)
   *
   * @return mixed
   */
function wp_callback_for_civicrm_alterAPIPermissions($entity, $action, &$params, &$permissions) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_alterAPIPermissions', 'wp_callback_for_civicrm_alterAPIPermissions', 10, 4);

/**
   * This hook is invoked when building a CiviCRM name badge.
   *
   * @param string $labelName
   *   String referencing name of badge format.
   * @param object $label
   *   Reference to the label object.
   * @param array $format
   *   Array of format data.
   * @param array $participant
   *   Array of participant values.
   *
   * @return null
   *   the return value is ignored
   */
function wp_callback_for_civicrm_alterBadge($labelName, &$label, &$format, &$participant) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_alterBadge', 'wp_callback_for_civicrm_alterBadge', 10, 4);

/**
   * This hook is called before encoding data in barcode.
   *
   * @param array $data
   *   Associated array of values available for encoding.
   * @param string $type
   *   Type of barcode, classic barcode or QRcode.
   * @param string $context
   *   Where this hooks is invoked.
   *
   * @return mixed
   */
function wp_callback_for_civicrm_alterBarcode(&$data, $type, $context) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_alterBarcode', 'wp_callback_for_civicrm_alterBarcode', 10, 3);

/**
   * This hook is called when membership status is being calculated.
   *
   * @param array $membershipStatus
   *   Membership status details as determined - alter if required.
   * @param array $arguments
   *   Arguments passed in to calculate date.
   * - 'start_date'
   * - 'end_date'
   * - 'status_date'
   * - 'join_date'
   * - 'exclude_is_admin'
   * - 'membership_type_id'
   * @param array $membership
   *   Membership details from the calling function.
   *
   * @return mixed
   */
function wp_callback_for_civicrm_alterCalculatedMembershipStatus(&$membershipStatus, $arguments, $membership) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_alterCalculatedMembershipStatus', 'wp_callback_for_civicrm_alterCalculatedMembershipStatus', 10, 3);

/**
   * This hooks allows alteration of generated page content.
   *
   * @param $content
   *   Previously generated content.
   * @param $context
   *   Context of content - page or form.
   * @param $tplName
   *   The file name of the tpl.
   * @param $object
   *   A reference to the page or form object.
   *
   * @return mixed
   */
function wp_callback_for_civicrm_alterContent(&$content, $context, $tplName, &$object) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_alterContent', 'wp_callback_for_civicrm_alterContent', 10, 4);

/**
   * This hook is called to alter Deferred revenue item values just before they are
   * inserted in civicrm_financial_trxn table
   *
   * @param array $deferredRevenues
   *
   * @param array $contributionDetails
   *
   * @param bool $update
   *
   * @param string $context
   *
   * @return mixed
   */
function wp_callback_for_civicrm_alterDeferredRevenueItems(&$deferredRevenues, $contributionDetails, $update, $context) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_alterDeferredRevenueItems', 'wp_callback_for_civicrm_alterDeferredRevenueItems', 10, 4);

/**
   * Issue CRM-14276
   * Add a hook for altering the display name
   *
   * hook_civicrm_contact_get_displayname(&$display_name, $objContact)
   *
   * @param string $displayName
   * @param int $contactId
   * @param object $dao
   *   The contact object.
   *
   * @return mixed
   */
function wp_callback_for_civicrm_alterDisplayName(&$displayName, $contactId, $dao) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_alterDisplayName', 'wp_callback_for_civicrm_alterDisplayName', 10, 3);

/**
   * This hook allows modification of the data calculated for merging locations.
   *
   * @param array $blocksDAO
   *   Array of location DAO to be saved. These are arrays in 2 keys 'update' & 'delete'.
   * @param int $mainId
   *   Contact_id of the contact that survives the merge.
   * @param int $otherId
   *   Contact_id of the contact that will be absorbed and deleted.
   * @param array $migrationInfo
   *   Calculated migration info, informational only.
   *
   * @return mixed
   */
function wp_callback_for_civicrm_alterLocationMergeData(&$blocksDAO, $mainId, $otherId, $migrationInfo) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_alterLocationMergeData', 'wp_callback_for_civicrm_alterLocationMergeData', 10, 4);

/**
   * This hook allows changes to the spec of which tables to log.
   *
   * @param array $logTableSpec
   *
   * @return mixed
   */
function wp_callback_for_civicrm_alterLogTables(&$logTableSpec) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_alterLogTables', 'wp_callback_for_civicrm_alterLogTables', 10, 1);

/**
   * Deprecated: Misnamed version of alterMailer(). Remove post-4.7.x.
   * Modify or replace the Mailer object used for outgoing mail.
   *
   * @param object $mailer
   *   The default mailer produced by normal configuration; a PEAR "Mail" class (like those returned by Mail::factory)
   * @param string $driver
   *   The type of the default mailer (eg "smtp", "sendmail", "mock", "CRM_Mailing_BAO_Spool")
   * @param array $params
   *   The default mailer config options
   *
   * @return mixed
   * @see Mail::factory
   * @deprecated
   */
function wp_callback_for_civicrm_alterMail(&$mailer, $driver, $params) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_alterMail', 'wp_callback_for_civicrm_alterMail', 10, 3);

/**
   * This hook is called after getting the content of the mail and before tokenizing it.
   *
   * @param array $content
   *   Array fields include: html, text, subject
   *
   * @return mixed
   */
function wp_callback_for_civicrm_alterMailContent(&$content) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_alterMailContent', 'wp_callback_for_civicrm_alterMailContent', 10, 1);

/**
   * This hook is called when an email is about to be sent by CiviCRM.
   *
   * @param array $params
   *   Array fields include: groupName, from, toName, toEmail, subject, cc, bcc, text, html,
   *   returnPath, replyTo, headers, attachments (array)
   * @param string $context
   *   The context in which the hook is being invoked, eg 'civimail'.
   *
   * @return mixed
   */
function wp_callback_for_civicrm_alterMailParams(&$params, $context) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_alterMailParams', 'wp_callback_for_civicrm_alterMailParams', 10, 2);

/**
   * Modify or replace the Mailer object used for outgoing mail.
   *
   * @param object $mailer
   *   The default mailer produced by normal configuration; a PEAR "Mail" class (like those returned by Mail::factory)
   * @param string $driver
   *   The type of the default mailer (eg "smtp", "sendmail", "mock", "CRM_Mailing_BAO_Spool")
   * @param array $params
   *   The default mailer config options
   *
   * @return mixed
   * @see Mail::factory
   */
function wp_callback_for_civicrm_alterMailer(&$mailer, $driver, $params) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_alterMailer', 'wp_callback_for_civicrm_alterMailer', 10, 3);

/**
   * Hook definition for altering the generation of Mailing Labels.
   *
   * @param array $args
   *   An array of the args in the order defined for the tcpdf multiCell api call.
   *                    with the variable names below converted into string keys (ie $w become 'w'
   *                    as the first key for $args)
   *   float $w Width of cells. If 0, they extend up to the right margin of the page.
   *   float $h Cell minimum height. The cell extends automatically if needed.
   *   string $txt String to print
   *   mixed $border Indicates if borders must be drawn around the cell block. The value can
   *                 be either a number:<ul><li>0: no border (default)</li><li>1: frame</li></ul>or
   *                 a string containing some or all of the following characters (in any order):
   *                 <ul><li>L: left</li><li>T: top</li><li>R: right</li><li>B: bottom</li></ul>
   *   string $align Allows to center or align the text. Possible values are:<ul><li>L or empty string:
   *                 left align</li><li>C: center</li><li>R: right align</li><li>J: justification
   *                 (default value when $ishtml=false)</li></ul>
   *   int $fill Indicates if the cell background must be painted (1) or transparent (0). Default value: 0.
   *   int $ln Indicates where the current position should go after the call. Possible values are:<ul><li>0:
   *           to the right</li><li>1: to the beginning of the next line [DEFAULT]</li><li>2: below</li></ul>
   *   float $x x position in user units
   *   float $y y position in user units
   *   boolean $reseth if true reset the last cell height (default true).
   *   int $stretch stretch character mode: <ul><li>0 = disabled</li><li>1 = horizontal scaling only if
   *                necessary</li><li>2 = forced horizontal scaling</li><li>3 = character spacing only if
   *                necessary</li><li>4 = forced character spacing</li></ul>
   *   boolean $ishtml set to true if $txt is HTML content (default = false).
   *   boolean $autopadding if true, uses internal padding and automatically adjust it to account for line width.
   *   float $maxh maximum height. It should be >= $h and less then remaining space to the bottom of the page,
   *               or 0 for disable this feature. This feature works only when $ishtml=false.
   *
   * @return mixed
   */
function wp_callback_for_civicrm_alterMailingLabelParams(&$args) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_alterMailingLabelParams', 'wp_callback_for_civicrm_alterMailingLabelParams', 10, 1);

/**
   * (Experimental) This hook is called when build the menu table.
   *
   * @param array $items
   *   List of records to include in menu table.
   * @return null
   *   the return value is ignored
   */
function wp_callback_for_civicrm_alterMenu(&$items) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_alterMenu', 'wp_callback_for_civicrm_alterMenu', 10, 1);

/**
   * Hook definition for altering payment parameters before talking to a payment processor back end.
   *
   * Definition will look like this:
   *
   *   function hook_civicrm_alterPaymentProcessorParams(
   *     $paymentObj,
   *     &$rawParams,
   *     &$cookedParams
   *   );
   *
   * @param CRM_Core_Payment $paymentObj
   *   Instance of payment class of the payment processor invoked (e.g., 'CRM_Core_Payment_Dummy')
   *   See discussion in CRM-16224 as to whether $paymentObj should be passed by reference.
   * @param array &$rawParams
   *    array of params as passed to to the processor
   * @param array &$cookedParams
   *     params after the processor code has translated them into its own key/value pairs
   *
   * @return mixed
   *   This return is not really intended to be used.
   */
function wp_callback_for_civicrm_alterPaymentProcessorParams($paymentObj, &$rawParams, &$cookedParams) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_alterPaymentProcessorParams', 'wp_callback_for_civicrm_alterPaymentProcessorParams', 10, 3);

/**
   * @param $varType
   * @param $var
   * @param $object
   *
   * @return mixed
   */
function wp_callback_for_civicrm_alterReportVar($varType, &$var, &$object) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_alterReportVar', 'wp_callback_for_civicrm_alterReportVar', 10, 3);

/**
   * This hook is called when Settings specifications are loaded.
   *
   * @param array $settingsFolders
   *   List of paths from which to derive metadata
   *
   * @return mixed
   */
function wp_callback_for_civicrm_alterSettingsFolders(&$settingsFolders) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_alterSettingsFolders', 'wp_callback_for_civicrm_alterSettingsFolders', 10, 1);

/**
   * This hook is called when Settings have been loaded from the xml
   * It is an opportunity for hooks to alter the data
   *
   * @param array $settingsMetaData
   *   Settings Metadata.
   * @param int $domainID
   * @param mixed $profile
   *
   * @return mixed
   */
function wp_callback_for_civicrm_alterSettingsMetaData(&$settingsMetaData, $domainID, $profile) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_alterSettingsMetaData', 'wp_callback_for_civicrm_alterSettingsMetaData', 10, 3);

/**
   * This hooks allows alteration of the tpl file used to generate content. It differs from the
   * altercontent hook as the content has already been rendered through the tpl at that point
   *
   * @param $formName
   *   Previously generated content.
   * @param $form
   *   Reference to the form object.
   * @param $context
   *   Context of content - page or form.
   * @param $tplName
   *   Reference the file name of the tpl.
   *
   * @return mixed
   */
function wp_callback_for_civicrm_alterTemplateFile($formName, &$form, $context, &$tplName) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_alterTemplateFile', 'wp_callback_for_civicrm_alterTemplateFile', 10, 4);

/**
   * EXPERIMENTAL: This hook allows one to register additional Angular modules
   *
   * @param array $angularModules
   *   List of modules.
   * @return null
   *   the return value is ignored
   *
   * @code
   * function mymod_civicrm_angularModules(&$angularModules) {
   *   $angularModules['myAngularModule'] = array(
   *     'ext' => 'org.example.mymod',
   *     'js' => array('js/myAngularModule.js'),
   *   );
   *   $angularModules['myBigAngularModule'] = array(
   *     'ext' => 'org.example.mymod',
   *     'js' => array('js/part1.js', 'js/part2.js'),
   *     'css' => array('css/myAngularModule.css'),
   *     'partials' => array('partials/myBigAngularModule'),
   *   );
   * }
   * @endcode
   */
function wp_callback_for_civicrm_angularModules(&$angularModules) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_angularModules', 'wp_callback_for_civicrm_angularModules', 10, 1);

/**
   * This hook is called before running an api call.
   *
   * @param API_Wrapper[] $wrappers
   *   (see CRM_Utils_API_ReloadOption as an example)
   * @param mixed $apiRequest
   *
   * @return null
   *   The return value is ignored
   */
function wp_callback_for_civicrm_apiWrappers(&$wrappers, $apiRequest) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_apiWrappers', 'wp_callback_for_civicrm_apiWrappers', 10, 2);

/**
   * This hook is called when the entries of the CSV Batch export are mapped.
   *
   * @param array $results
   * @param array $items
   *
   * @return mixed
   */
function wp_callback_for_civicrm_batchItems(&$results, &$items) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_batchItems', 'wp_callback_for_civicrm_batchItems', 10, 2);

/**
   * This hook is called when a query string of the CSV Batch export is generated.
   *
   * @param string $query
   *
   * @return mixed
   */
function wp_callback_for_civicrm_batchQuery(&$query) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_batchQuery', 'wp_callback_for_civicrm_batchQuery', 10, 1);

/**
   * This hook is called when building the amount structure for a Contribution or Event Page.
   *
   * @param int $pageType
   *   Is this a contribution or event page.
   * @param CRM_Core_Form $form
   *   Reference to the form object.
   * @param array $amount
   *   The amount structure to be displayed.
   *
   * @return null
   */
function wp_callback_for_civicrm_buildAmount($pageType, &$form, &$amount) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_buildAmount', 'wp_callback_for_civicrm_buildAmount', 10, 3);

/**
   * This hook is invoked when building a CiviCRM form. This hook should also
   * be used to set the default values of a form element
   *
   * @param string $formName
   *   The name of the form.
   * @param CRM_Core_Form $form
   *   Reference to the form object.
   *
   * @return null
   *   the return value is ignored
   */
function wp_callback_for_civicrm_buildForm($formName, &$form) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_buildForm', 'wp_callback_for_civicrm_buildForm', 10, 2);

/**
   * This hook is called while preparing a profile form.
   *
   * @param string $profileName
   * @return mixed
   */
function wp_callback_for_civicrm_buildProfile($profileName) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_buildProfile', 'wp_callback_for_civicrm_buildProfile', 10, 1);

/**
   * This hook is called when building the state list for a particular country.
   *
   * @param array $countryID
   *   The country id whose states are being selected.
   * @param $states
   *
   * @return null
   */
function wp_callback_for_civicrm_buildStateProvinceForCountry($countryID, &$states) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_buildStateProvinceForCountry', 'wp_callback_for_civicrm_buildStateProvinceForCountry', 10, 2);

/**
   * This hook is called when uf groups are being built for a module.
   *
   * @param string $moduleName
   *   Module name.
   * @param array $ufGroups
   *   Array of ufgroups for a module.
   *
   * @return null
   */
function wp_callback_for_civicrm_buildUFGroupsForModule($moduleName, &$ufGroups) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_buildUFGroupsForModule', 'wp_callback_for_civicrm_buildUFGroupsForModule', 10, 2);

/**
   * This hook fires whenever a record in a case changes.
   *
   * @param \Civi\CCase\Analyzer $analyzer
   *   A bundle of data about the case (such as the case and activity records).
   */
function wp_callback_for_civicrm_caseChange($analyzer) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_caseChange', 'wp_callback_for_civicrm_caseChange', 10, 1);

/**
   * This hook is called when rendering the Manage Case screen.
   *
   * @param int $caseID
   *   The case ID.
   *
   * @return array
   *   Array of data to be displayed, where the key is a unique id to be used for styling (div id's)
   *   and the value is an array with keys 'label' and 'value' specifying label/value pairs
   */
function wp_callback_for_civicrm_caseSummary($caseID) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_caseSummary', 'wp_callback_for_civicrm_caseSummary', 10, 1);

/**
   * This hook is called when locating CiviCase types.
   *
   * @param array $caseTypes
   *
   * @return mixed
   */
function wp_callback_for_civicrm_caseTypes(&$caseTypes) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_caseTypes', 'wp_callback_for_civicrm_caseTypes', 10, 1);

/**
   * Check system status.
   *
   * @param array $messages
   *   Array<CRM_Utils_Check_Message>. A list of messages regarding system status.
   * @return mixed
   */
function wp_callback_for_civicrm_check(&$messages) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_check', 'wp_callback_for_civicrm_check', 10, 1);

/**
   * This hook is called soon after the CRM_Core_Config object has ben initialized.
   * You can use this hook to modify the config object and hence behavior of CiviCRM dynamically.
   *
   * @param CRM_Core_Config|array $config
   *   The config object
   *
   * @return mixed
   */
function wp_callback_for_civicrm_config(&$config) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_config', 'wp_callback_for_civicrm_config', 10, 1);

/**
   * Use this hook to populate the list of contacts returned by Contact Reference custom fields.
   * By default, Contact Reference fields will search on and return all CiviCRM contacts.
   * If you want to limit the contacts returned to a specific group, or some other criteria
   * - you can override that behavior by providing a SQL query that returns some subset of your contacts.
   * The hook is called when the query is executed to get the list of contacts to display.
   *
   * @param mixed $query
   *   - the query that will be executed (input and output parameter);.
   *   It's important to realize that the ACL clause is built prior to this hook being fired,
   *   so your query will ignore any ACL rules that may be defined.
   *   Your query must return two columns:
   *     the contact 'data' to display in the autocomplete dropdown (usually contact.sort_name - aliased as 'data')
   *     the contact IDs
   * @param string $queryText
   *   The name string to execute the query against (this is the value being typed in by the user).
   * @param string $context
   *   The context in which this ajax call is being made (for example: 'customfield', 'caseview').
   * @param int $id
   *   The id of the object for which the call is being made.
   *   For custom fields, it will be the custom field id
   *
   * @return mixed
   */
function wp_callback_for_civicrm_contactListQuery(&$query, $queryText, $context, $id) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_contactListQuery', 'wp_callback_for_civicrm_contactListQuery', 10, 4);

/**
   * Modify the CiviCRM container - add new services, parameters, extensions, etc.
   *
   * @code
   * use Symfony\Component\Config\Resource\FileResource;
   * use Symfony\Component\DependencyInjection\Definition;
   *
   * function mymodule_civicrm_container($container) {
   *   $container->addResource(new FileResource(__FILE__));
   *   $container->setDefinition('mysvc', new Definition('My\Class', array()));
   * }
   * @endcode
   *
   * Tip: The container configuration will be compiled/cached. The default cache
   * behavior is aggressive. When you first implement the hook, be sure to
   * flush the cache. Additionally, you should relax caching during development.
   * In `civicrm.settings.php`, set define('CIVICRM_CONTAINER_CACHE', 'auto').
   *
   * @param \Symfony\Component\DependencyInjection\ContainerBuilder $container
   * @see http://symfony.com/doc/current/components/dependency_injection/index.html
   */
function wp_callback_for_civicrm_container($container) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_container', 'wp_callback_for_civicrm_container', 10, 1);

/**
   * This hook is called after a copy of an object has been made. The current objects are
   * Event, Contribution Page and UFGroup
   *
   * @param string $objectName
   *   Name of the object.
   * @param object $object
   *   Reference to the copy.
   *
   * @return null
   */
function wp_callback_for_civicrm_copy($objectName, &$object) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_copy', 'wp_callback_for_civicrm_copy', 10, 2);

/**
   * This hook is called when core resources are being loaded
   *
   * @see CRM_Core_Resources::coreResourceList
   *
   * @param array $list
   * @param string $region
   */
function wp_callback_for_civicrm_coreResourceList(&$list, $region) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_coreResourceList', 'wp_callback_for_civicrm_coreResourceList', 10, 2);

/**
   * This hook is called before running pending cron jobs.
   *
   * @param CRM_Core_JobManager $jobManager
   *
   * @return null
   *   The return value is ignored.
   */
function wp_callback_for_civicrm_cron($jobManager) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_cron', 'wp_callback_for_civicrm_cron', 10, 1);

/**
   * Generate a default CRUD URL for an entity.
   *
   * @param array $spec
   *   With keys:.
   *   - action: int, eg CRM_Core_Action::VIEW or CRM_Core_Action::UPDATE
   *   - entity_table: string
   *   - entity_id: int
   * @param CRM_Core_DAO $bao
   * @param array $link
   *   To define the link, add these keys to $link:.
   *   - title: string
   *   - path: string
   *   - query: array
   *   - url: string (used in lieu of "path"/"query")
   *      Note: if making "url" CRM_Utils_System::url(), set $htmlize=false
   * @return mixed
   */
function wp_callback_for_civicrm_crudLink($spec, $bao, &$link) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_crudLink', 'wp_callback_for_civicrm_crudLink', 10, 3);

/**
   * This hook is called after a db write on a custom table.
   *
   * @param string $op
   *   The type of operation being performed.
   * @param string $groupID
   *   The custom group ID.
   * @param object $entityID
   *   The entityID of the row in the custom table.
   * @param array $params
   *   The parameters that were sent into the calling function.
   *
   * @return null
   *   the return value is ignored
   */
function wp_callback_for_civicrm_custom($op, $groupID, $entityID, &$params) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_custom', 'wp_callback_for_civicrm_custom', 10, 4);

/**
   * This hook is called when CiviCRM needs to edit/display a custom field with options
   *
   * @deprecated in favor of hook_civicrm_fieldOptions
   *
   * @param int $customFieldID
   *   The custom field ID.
   * @param array $options
   *   The current set of options for that custom field.
   *   You can add/remove existing options.
   *   Important: This array may contain meta-data about the field that is needed elsewhere, so it is important
   *              to be careful to not overwrite the array.
   *   Only add/edit/remove the specific field options you intend to affect.
   * @param bool $detailedFormat
   *   If true, the options are in an ID => array ( 'id' => ID, 'label' => label, 'value' => value ) format
   * @param array $selectAttributes
   *   Contain select attribute(s) if any.
   *
   * @return mixed
   */
function wp_callback_for_civicrm_customFieldOptions($customFieldID, &$options, $detailedFormat, $selectAttributes) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_customFieldOptions', 'wp_callback_for_civicrm_customFieldOptions', 10, 4);

/**
   * This hook is called when rendering the dashboard (q=civicrm/dashboard)
   *
   * @param int $contactID
   *   The contactID for whom the dashboard is being rendered.
   * @param int $contentPlacement
   *   (output parameter) where should the hook content be displayed.
   * relative to the activity list
   *
   * @return string
   *   the html snippet to include in the dashboard
   */
function wp_callback_for_civicrm_dashboard($contactID, &$contentPlacement) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_dashboard', 'wp_callback_for_civicrm_dashboard', 10, 2);

/**
   * This hook is called while viewing contact dashboard.
   *
   * @param array $availableDashlets
   *   List of dashlets; each is formatted per api/v3/Dashboard
   * @param array $defaultDashlets
   *   List of dashlets; each is formatted per api/v3/DashboardContact
   *
   * @return mixed
   */
function wp_callback_for_civicrm_dashboard_defaults($availableDashlets, &$defaultDashlets) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_dashboard_defaults', 'wp_callback_for_civicrm_dashboard_defaults', 10, 2);

/**
   * This hook is called when a module-extension is disabled.
   * Each module will receive hook_civicrm_disable during its own disablement (but not during the
   * disablement of unrelated modules).
   */
function wp_callback_for_civicrm_disable() {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_disable', 'wp_callback_for_civicrm_disable', 10, 0);

/**
   * This hook allows modification of the queries constructed from dupe rules.
   *
   * @param string $obj
   *   Object of rulegroup class.
   * @param string $type
   *   Type of queries e.g table / threshold.
   * @param array $query
   *   Set of queries.
   *
   * @return mixed
   */
function wp_callback_for_civicrm_dupeQuery($obj, $type, &$query) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_dupeQuery', 'wp_callback_for_civicrm_dupeQuery', 10, 3);

/**
   * This hook is called AFTER EACH email has been processed by the script bin/EmailProcessor.php
   *
   * @param string $type
   *   Type of mail processed: 'activity' OR 'mailing'.
   * @param array &$params the params that were sent to the CiviCRM API function
   * @param object $mail
   *   The mail object which is an ezcMail class.
   * @param array &$result the result returned by the api call
   * @param string $action
   *   (optional ) the requested action to be performed if the types was 'mailing'.
   *
   * @return mixed
   */
function wp_callback_for_civicrm_emailProcessor($type, &$params, $mail, &$result, $action) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_emailProcessor', 'wp_callback_for_civicrm_emailProcessor', 10, 5);

/**
   * This hook is called when we are determining the contactID for a specific
   * email address
   *
   * @param string $email
   *   The email address.
   * @param int $contactID
   *   The contactID that matches this email address, IF it exists.
   * @param array $result
   *   (reference) has two fields.
   *                          contactID - the new (or same) contactID
   *                          action - 3 possible values:
   *                          CRM_Utils_Mail_Incoming::EMAILPROCESSOR_CREATE_INDIVIDUAL - create a new contact record
   *                          CRM_Utils_Mail_Incoming::EMAILPROCESSOR_OVERRIDE - use the new contactID
   *                          CRM_Utils_Mail_Incoming::EMAILPROCESSOR_IGNORE   - skip this email address
   *
   * @return null
   */
function wp_callback_for_civicrm_emailProcessorContact($email, $contactID, &$result) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_emailProcessorContact', 'wp_callback_for_civicrm_emailProcessorContact', 10, 3);

/**
   * This hook is called when a module-extension is re-enabled.
   * Each module will receive hook_civicrm_enable during its own re-enablement (but not during the
   * re-enablement of unrelated modules).
   */
function wp_callback_for_civicrm_enable() {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_enable', 'wp_callback_for_civicrm_enable', 10, 0);

/**
   * Allows the list of filters on the EntityRef widget to be altered.
   *
   * @see CRM_Core_Resources::entityRefFilters
   *
   * @param array $filters
   */
function wp_callback_for_civicrm_entityRefFilters(&$filters) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_entityRefFilters', 'wp_callback_for_civicrm_entityRefFilters', 10, 1);

/**
   * This hook is called for declaring managed entities via API.
   *
   * @param array[] $entityTypes
   *   List of entity types; each entity-type is an array with keys:
   *   - name: string, a unique short name (e.g. "ReportInstance")
   *   - class: string, a PHP DAO class (e.g. "CRM_Report_DAO_Instance")
   *   - table: string, a SQL table name (e.g. "civicrm_report_instance")
   *   - fields_callback: array, list of callables which manipulates field list
   *   - links_callback: array, list of callables which manipulates fk list
   *
   * @return null
   *   The return value is ignored
   */
function wp_callback_for_civicrm_entityTypes(&$entityTypes) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_entityTypes', 'wp_callback_for_civicrm_entityTypes', 10, 1);

/**
   * @param mixed $form
   * @param array $params
   *
   * @return mixed
   */
function wp_callback_for_civicrm_eventDiscount(&$form, &$params) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_eventDiscount', 'wp_callback_for_civicrm_eventDiscount', 10, 2);

/**
   * This hook is called before record is exported as CSV.
   *
   * @param string $exportTempTable
   *   Name of the temporary export table used during export.
   * @param array $headerRows
   *   Header rows for output.
   * @param array $sqlColumns
   *   SQL columns.
   * @param int $exportMode
   *   Export mode ( contact, contribution, etc...).
   *
   * @return mixed
   */
function wp_callback_for_civicrm_export(&$exportTempTable, &$headerRows, &$sqlColumns, &$exportMode) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_export', 'wp_callback_for_civicrm_export', 10, 4);

/**
   * Hook for modifying field options
   *
   * @param string $entity
   * @param string $field
   * @param array $options
   * @param array $params
   *
   * @return mixed
   */
function wp_callback_for_civicrm_fieldOptions($entity, $field, &$options, $params) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_fieldOptions', 'wp_callback_for_civicrm_fieldOptions', 10, 4);

/**
   * @param array <CRM_Core_FileSearchInterface> $fileSearches
   * @return mixed
   */
function wp_callback_for_civicrm_fileSearches(&$fileSearches) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_fileSearches', 'wp_callback_for_civicrm_fileSearches', 10, 1);

/**
   * This hook is called when a geocoder's format method is called.
   *
   * @param string $geoProvider
   * @param array $values
   * @param SimpleXMLElement $xml
   *
   * @return mixed
   */
function wp_callback_for_civicrm_geocoderFormat($geoProvider, &$values, $xml) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_geocoderFormat', 'wp_callback_for_civicrm_geocoderFormat', 10, 3);

/**
   * This hook is called for bypass a few civicrm urls from IDS check.
   *
   * @param array $skip list of civicrm urls
   *
   * @return mixed
   */
function wp_callback_for_civicrm_idsException(&$skip) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_idsException', 'wp_callback_for_civicrm_idsException', 10, 1);

/**
   * This hook is called after a row has been processed and the
   * record (and associated records imported
   *
   * @param string $object
   *   Object being imported (for now Contact only, later Contribution, Activity,.
   *                               Participant and Member)
   * @param string $usage
   *   Hook usage/location (for now process only, later mapping and others).
   * @param string $objectRef
   *   Import record object.
   * @param array $params
   *   Array with various key values: currently.
   *                  contactID       - contact id
   *                  importID        - row id in temp table
   *                  importTempTable - name of tempTable
   *                  fieldHeaders    - field headers
   *                  fields          - import fields
   *
   * @return mixed
   */
function wp_callback_for_civicrm_import($object, $usage, &$objectRef, &$params) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_import', 'wp_callback_for_civicrm_import', 10, 4);

/**
   * This hook is called when a module-extension is installed.
   * Each module will receive hook_civicrm_install during its own installation (but not during the
   * installation of unrelated modules).
   */
function wp_callback_for_civicrm_install() {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_install', 'wp_callback_for_civicrm_install', 10, 0);

/**
   * This hook retrieves links from other modules and injects it into.
   * the view contact tabs
   *
   * @param string $op
   *   The type of operation being performed.
   * @param string $objectName
   *   The name of the object.
   * @param int $objectId
   *   The unique identifier for the object.
   * @param array $links
   *   (optional) the links array (introduced in v3.2).
   * @param int $mask
   *   (optional) the bitmask to show/hide links.
   * @param array $values
   *   (optional) the values to fill the links.
   *
   * @return null
   *   the return value is ignored
   */
function wp_callback_for_civicrm_links($op, $objectName, &$objectId, &$links, &$mask, &$values) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_links', 'wp_callback_for_civicrm_links', 10, 6);

/**
   * This hook is called when composing a mailing. You can include / exclude other groups as needed.
   *
   * @param mixed $form
   *   The form object for which groups / mailings being displayed
   * @param array $groups
   *   The list of groups being included / excluded
   * @param array $mailings
   *   The list of mailings being included / excluded
   *
   * @return mixed
   */
function wp_callback_for_civicrm_mailingGroups(&$form, &$groups, &$mailings) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_mailingGroups', 'wp_callback_for_civicrm_mailingGroups', 10, 3);

/**
   * (Experimental) Modify the list of template-types used for CiviMail composition.
   *
   * @param array $types
   *   Sequentially indexed list of template types. Each type specifies:
   *     - name: string
   *     - editorUrl: string, Angular template URL
   *     - weight: int, priority when picking a default value for new mailings
   * @return mixed
   */
function wp_callback_for_civicrm_mailingTemplateTypes(&$types) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_mailingTemplateTypes', 'wp_callback_for_civicrm_mailingTemplateTypes', 10, 1);

/**
   * This hook is called for declaring managed entities via API.
   *
   * @param array $entities
   *   List of pending entities. Each entity is an array with keys:
   *   + 'module': string; for module-extensions, this is the fully-qualifed name (e.g. "com.example.mymodule"); for CMS modules, the name is prefixed by the CMS (e.g. "drupal.mymodule")
   *   + 'name': string, a symbolic name which can be used to track this entity (Note: Each module creates its own namespace)
   *   + 'entity': string, an entity-type supported by the CiviCRM API (Note: this currently must be an entity which supports the 'is_active' property)
   *   + 'params': array, the entity data as supported by the CiviCRM API
   *   + 'update' (v4.5+): string, a policy which describes when to update records
   *     - 'always' (default): always update the managed-entity record; changes in $entities will override any local changes (eg by the site-admin)
   *     - 'never': never update the managed-entity record; changes made locally (eg by the site-admin) will override changes in $entities
   *   + 'cleanup' (v4.5+): string, a policy which describes whether to cleanup the record when it becomes orphaned (ie when $entities no longer references the record)
   *     - 'always' (default): always delete orphaned records
   *     - 'never': never delete orphaned records
   *     - 'unused': only delete orphaned records if there are no other references to it in the DB. (This is determined by calling the API's "getrefcount" action.)
   *
   * @return null
   *   the return value is ignored
   */
function wp_callback_for_civicrm_managed(&$entities) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_managed', 'wp_callback_for_civicrm_managed', 10, 1);

/**
   * This hook is called when composing the array of membershipTypes and their cost during a membership registration
   * (new or renewal).
   * Note the hook is called on initial page load and also reloaded after submit (PRG pattern).
   * You can use it to alter the membership types when first loaded, or after submission
   * (for example if you want to gather data in the form and use it to alter the fees).
   *
   * @param mixed $form
   *   The form object that is presenting the page
   * @param array $membershipTypes
   *   The array of membership types and their amount
   *
   * @return mixed
   */
function wp_callback_for_civicrm_membershipTypeValues(&$form, &$membershipTypes) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_membershipTypeValues', 'wp_callback_for_civicrm_membershipTypeValues', 10, 2);

/**
   * This hook allows modification of the data used to perform merging of duplicates.
   *
   * @param string $type
   *   The type of data being passed (cidRefs|eidRefs|relTables|sqls).
   * @param array $data
   *   The data, as described in $type.
   * @param int $mainId
   *   Contact_id of the contact that survives the merge.
   * @param int $otherId
   *   Contact_id of the contact that will be absorbed and deleted.
   * @param array $tables
   *   When $type is "sqls", an array of tables as it may have been handed to the calling function.
   *
   * @return mixed
   */
function wp_callback_for_civicrm_merge($type, &$data, $mainId, $otherId, $tables) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_merge', 'wp_callback_for_civicrm_merge', 10, 5);

/**
   * This hook allows modification of the navigation menu.
   *
   * @param array $params
   *   Associated array of navigation menu entry to Modify/Add
   *
   * @return mixed
   */
function wp_callback_for_civicrm_navigationMenu(&$params) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_navigationMenu', 'wp_callback_for_civicrm_navigationMenu', 10, 1);

/**
   * This hook provides a way to override the default privacy behavior for notes.
   *
   * @param array &$noteValues
   *   Associative array of values for this note
   *
   * @return mixed
   */
function wp_callback_for_civicrm_notePrivacy(&$noteValues) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_notePrivacy', 'wp_callback_for_civicrm_notePrivacy', 10, 1);

/**
   * This hooks allows to change option values.
   *
   * @deprecated in favor of hook_civicrm_fieldOptions
   *
   * @param array $options
   *   Associated array of option values / id
   * @param string $groupName
   *   Option group name
   *
   * @return mixed
   */
function wp_callback_for_civicrm_optionValues(&$options, $groupName) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_optionValues', 'wp_callback_for_civicrm_optionValues', 10, 2);

/**
   * This hook is called before a CiviCRM Page is rendered. You can use this hook to insert smarty variables
   * in a  template
   *
   * @param object $page
   *   The page that will be rendered.
   *
   * @return null
   */
function wp_callback_for_civicrm_pageRun(&$page) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_pageRun', 'wp_callback_for_civicrm_pageRun', 10, 1);

/**
   * This hook is called when loading CMS permissions; use this hook to modify
   * the array of system permissions for CiviCRM.
   *
   * @param array $permissions
   *   Array of permissions. See CRM_Core_Permission::getCorePermissions() for
   *   the format of this array.
   *
   * @return null
   *   The return value is ignored
   */
function wp_callback_for_civicrm_permission(&$permissions) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_permission', 'wp_callback_for_civicrm_permission', 10, 1);

/**
   * This hook is called when checking permissions; use this hook to dynamically
   * escalate user permissions in certain use cases (cf. CRM-19256).
   *
   * @param string $permission
   *   The name of an atomic permission, ie. 'access deleted contacts'
   * @param bool $granted
   *   Whether this permission is currently granted. The hook can change this value.
   *
   * @return null
   *   The return value is ignored
   */
function wp_callback_for_civicrm_permission_check($permission, &$granted) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_permission_check', 'wp_callback_for_civicrm_permission_check', 10, 2);

/**
   * This hook is called after a db write on some core objects.
   *
   * @param string $op
   *   The type of operation being performed.
   * @param string $objectName
   *   The name of the object.
   * @param int $objectId
   *   The unique identifier for the object.
   * @param object $objectRef
   *   The reference to the object if available.
   *
   * @return mixed
   *   based on op. pre-hooks return a boolean or
   *                           an error message which aborts the operation
   */
function wp_callback_for_civicrm_post($op, $objectName, $objectId, &$objectRef) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_post', 'wp_callback_for_civicrm_post', 10, 4);

/**
   * This hook is called when an email has been successfully sent by CiviCRM, but not on an error.
   *
   * @param array $params
   *   The mailing parameters. Array fields include: groupName, from, toName,
   *   toEmail, subject, cc, bcc, text, html, returnPath, replyTo, headers,
   *   attachments (array)
   *
   * @return mixed
   */
function wp_callback_for_civicrm_postEmailSend(&$params) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_postEmailSend', 'wp_callback_for_civicrm_postEmailSend', 10, 1);

/**
   * This hook is called when a CiviMail mailing has completed
   *
   * @param int $mailingId
   *   Mailing ID
   *
   * @return mixed
   */
function wp_callback_for_civicrm_postMailing($mailingId) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_postMailing', 'wp_callback_for_civicrm_postMailing', 10, 1);

/**
   * This hook is invoked when a CiviCRM form is submitted. If the module has injected
   * any form elements, this hook should save the values in the database
   *
   * @param string $formName
   *   The name of the form.
   * @param CRM_Core_Form $form
   *   Reference to the form object.
   *
   * @return null
   *   the return value is ignored
   */
function wp_callback_for_civicrm_postProcess($formName, &$form) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_postProcess', 'wp_callback_for_civicrm_postProcess', 10, 2);

/**
   * @param CRM_Core_DAO $dao
   *
   * @return mixed
   */
function wp_callback_for_civicrm_postSave(&$dao) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_postSave', 'wp_callback_for_civicrm_postSave', 10, 1);

/**
   * This hook is called after a case merge (or a case reassign)
   *
   * @param int $mainContactId
   * @param int $mainCaseId
   * @param int $otherContactId
   * @param int $otherCaseId
   * @param bool $changeClient
   *
   * @return mixed
   */
function wp_callback_for_civicrm_post_case_merge($mainContactId, $mainCaseId, $otherContactId, $otherCaseId, $changeClient) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_post_case_merge', 'wp_callback_for_civicrm_post_case_merge', 10, 5);

/**
   * This hook is called before a db write on some core objects.
   * This hook does not allow the abort of the operation
   *
   * @param string $op
   *   The type of operation being performed.
   * @param string $objectName
   *   The name of the object.
   * @param int $id
   *   The object id if available.
   * @param array $params
   *   The parameters used for object creation / editing.
   *
   * @return null
   *   the return value is ignored
   */
function wp_callback_for_civicrm_pre($op, $objectName, $id, &$params) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_pre', 'wp_callback_for_civicrm_pre', 10, 4);

/**
   * This hook is invoked during the CiviCRM form preProcess phase.
   *
   * @param string $formName
   *   The name of the form.
   * @param CRM_Core_Form $form
   *   Reference to the form object.
   *
   * @return null
   *   the return value is ignored
   */
function wp_callback_for_civicrm_preProcess($formName, &$form) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_preProcess', 'wp_callback_for_civicrm_preProcess', 10, 2);

/**
   * This hook is called before a case merge (or a case reassign)
   *
   * @param int $mainContactId
   * @param int $mainCaseId
   * @param int $otherContactId
   * @param int $otherCaseId
   * @param bool $changeClient
   *
   * @return mixed
   */
function wp_callback_for_civicrm_pre_case_merge($mainContactId, $mainCaseId, $otherContactId, $otherCaseId, $changeClient) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_pre_case_merge', 'wp_callback_for_civicrm_pre_case_merge', 10, 5);

/**
   * This hook is called processing a valid profile form submission.
   *
   * @param string $profileName
   * @return mixed
   */
function wp_callback_for_civicrm_processProfile($profileName) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_processProfile', 'wp_callback_for_civicrm_processProfile', 10, 1);

/**
   * This hook is called while building the core search query,
   * so hook implementers can provide their own query objects which alters/extends core search.
   *
   * @param array $queryObjects
   * @param string $type
   *
   * @return mixed
   */
function wp_callback_for_civicrm_queryObjects(&$queryObjects, $type) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_queryObjects', 'wp_callback_for_civicrm_queryObjects', 10, 2);

/**
   * This hook is called before storing recently viewed items.
   *
   * @param array $recentArray
   *   An array of recently viewed or processed items, for in place modification.
   *
   * @return array
   */
function wp_callback_for_civicrm_recent(&$recentArray) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_recent', 'wp_callback_for_civicrm_recent', 10, 1);

/**
   * Determine how many other records refer to a given record.
   *
   * @param CRM_Core_DAO $dao
   *   The item for which we want a reference count.
   * @param array $refCounts
   *   Each item in the array is an Array with keys:
   *   - name: string, eg "sql:civicrm_email:contact_id"
   *   - type: string, eg "sql"
   *   - count: int, eg "5" if there are 5 email addresses that refer to $dao
   *
   * @return mixed
   *   Return is not really intended to be used.
   */
function wp_callback_for_civicrm_referenceCounts($dao, &$refCounts) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_referenceCounts', 'wp_callback_for_civicrm_referenceCounts', 10, 2);

/**
   * This hook is called from CRM_Core_Selector_Controller through which all searches in civicrm go.
   * This enables us hook implementors to modify both the headers and the rows
   *
   * The BIGGEST drawback with this hook is that you may need to modify the result template to include your
   * fields. The result files are CRM/{Contact,Contribute,Member,Event...}/Form/Selector.tpl
   *
   * However, if you use the same number of columns, you can overwrite the existing columns with the values that
   * you want displayed. This is a hackish, but avoids template modification.
   *
   * @param string $objectName
   *   The component name that we are doing the search.
   *                           activity, campaign, case, contact, contribution, event, grant, membership, and pledge
   * @param array &$headers the list of column headers, an associative array with keys: ( name, sort, order )
   * @param array &$rows the list of values, an associate array with fields that are displayed for that component
   * @param array $selector
   *   the selector object. Allows you access to the context of the search
   *
   * @return mixed
   *   modify the header and values object to pass the data you need
   */
function wp_callback_for_civicrm_searchColumns($objectName, &$headers, &$rows, &$selector) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_searchColumns', 'wp_callback_for_civicrm_searchColumns', 10, 4);

/**
   * This hook is called while preparing a list of contacts (based on a profile)
   *
   * @param string $profileName
   * @return mixed
   */
function wp_callback_for_civicrm_searchProfile($profileName) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_searchProfile', 'wp_callback_for_civicrm_searchProfile', 10, 1);

/**
   *
   * This hook is called to display the list of actions allowed after doing a search.
   * This allows the module developer to inject additional actions or to remove existing actions.
   *
   * @param string $objectType
   *   The object type for this search.
   *   - activity, campaign, case, contact, contribution, event, grant, membership, and pledge are supported.
   * @param array $tasks
   *   The current set of tasks for that custom field.
   *   You can add/remove existing tasks.
   *   Each task needs to have a title (eg 'title'  => ts( 'Group - add contacts')) and a class
   *   (eg 'class'  => 'CRM_Contact_Form_Task_AddToGroup').
   *   Optional result (boolean) may also be provided. Class can be an array of classes (not sure what that does :( ).
   *   The key for new Task(s) should not conflict with the keys for core tasks of that $objectType, which can be
   *   found in CRM/$objectType/Task.php.
   *
   * @return mixed
   */
function wp_callback_for_civicrm_searchTasks($objectType, &$tasks) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_searchTasks', 'wp_callback_for_civicrm_searchTasks', 10, 2);

/**
   * @param string|CRM_Core_DAO $entity
   * @param array $clauses
   * @return mixed
   */
function wp_callback_for_civicrm_selectWhereClause($entity, &$clauses) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_selectWhereClause', 'wp_callback_for_civicrm_selectWhereClause', 10, 2);

/**
   * This hook is called when rendering the contact summary.
   *
   * @param int $contactID
   *   The contactID for whom the summary is being rendered
   * @param mixed $content
   * @param int $contentPlacement
   *   Specifies where the hook content should be displayed relative to the
   *   existing content
   *
   * @return string
   *   The html snippet to include in the contact summary
   */
function wp_callback_for_civicrm_summary($contactID, &$content, &$contentPlacement) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_summary', 'wp_callback_for_civicrm_summary', 10, 3);

/**
   * This hook allows user to customize context menu Actions on contact summary page.
   *
   * @param array $actions
   *   Array of all Actions in contextmenu.
   * @param int $contactID
   *   ContactID for the summary page.
   *
   * @return mixed
   */
function wp_callback_for_civicrm_summaryActions(&$actions, $contactID) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_summaryActions', 'wp_callback_for_civicrm_summaryActions', 10, 2);

/**
   * This hook is called when rendering the tabs for a contact (q=civicrm/contact/view)c
   *
   * @param array $tabs
   *   The array of tabs that will be displayed.
   * @param int $contactID
   *   The contactID for whom the dashboard is being rendered.
   *
   * @return null
   * @deprecated Use tabset() instead.
   */
function wp_callback_for_civicrm_tabs(&$tabs, $contactID) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_tabs', 'wp_callback_for_civicrm_tabs', 10, 2);

/**
   * This hook is called when rendering the tabs used for events and potentially
   * contribution pages, etc.
   *
   * @param string $tabsetName
   *   Name of the screen or visual element.
   * @param array $tabs
   *   Tabs that will be displayed.
   * @param array $context
   *   Extra data about the screen or context in which the tab is used.
   *
   * @return null
   */
function wp_callback_for_civicrm_tabset($tabsetName, &$tabs, $context) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_tabset', 'wp_callback_for_civicrm_tabset', 10, 3);

/**
   * This hook is called when sending an email / printing labels to get the values for all the
   * tokens returned by the 'tokens' hook
   *
   * @param array $details
   *   The array to store the token values indexed by contactIDs (unless it a single).
   * @param array $contactIDs
   *   An array of contactIDs.
   * @param int $jobID
   *   The jobID if this is associated with a CiviMail mailing.
   * @param array $tokens
   *   The list of tokens associated with the content.
   * @param string $className
   *   The top level className from where the hook is invoked.
   *
   * @return null
   */
function wp_callback_for_civicrm_tokenValues(&$details, $contactIDs, $jobID, $tokens, $className) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_tokenValues', 'wp_callback_for_civicrm_tokenValues', 10, 5);

/**
   * This hook is called when sending an email / printing labels
   *
   * @param array $tokens
   *   The list of tokens that can be used for the contact.
   *
   * @return null
   */
function wp_callback_for_civicrm_tokens(&$tokens) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_tokens', 'wp_callback_for_civicrm_tokens', 10, 1);

/**
   * This hook collects the trigger definition from all components.
   *
   * @param $info
   * @param string $tableName
   *   (optional) the name of the table that we are interested in only.
   *
   * @internal param \reference $triggerInfo to an array of trigger information
   *   each element has 4 fields:
   *     table - array of tableName
   *     when  - BEFORE or AFTER
   *     event - array of eventName - INSERT OR UPDATE OR DELETE
   *     sql   - array of statements optionally terminated with a ;
   *             a statement can use the tokes {tableName} and {eventName}
   *             to do token replacement with the table / event. This allows
   *             templatizing logging and other hooks
   * @return mixed
   */
function wp_callback_for_civicrm_triggerInfo(&$info, $tableName) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_triggerInfo', 'wp_callback_for_civicrm_triggerInfo', 10, 2);

/**
   * @param CRM_Core_Exception Exception $exception
   * @param mixed $request
   *   Reserved for future use.
   */
function wp_callback_for_civicrm_unhandledException($exception, $request) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_unhandledException', 'wp_callback_for_civicrm_unhandledException', 10, 2);

/**
   * This hook is called when a module-extension is uninstalled.
   * Each module will receive hook_civicrm_uninstall during its own uninstallation (but not during the
   * uninstallation of unrelated modules).
   */
function wp_callback_for_civicrm_uninstall() {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_uninstall', 'wp_callback_for_civicrm_uninstall', 10, 0);

/**
   * This hook is called when a contact unsubscribes from a mailing.  It allows modules
   * to override what the contacts are removed from.
   *
   * @param string $op
   *   Ignored for now
   * @param int $mailingId
   *   The id of the mailing to unsub from
   * @param int $contactId
   *   The id of the contact who is unsubscribing
   * @param array|int $groups
   *   Groups the contact will be removed from.
   * @param array|int $baseGroups
   *   Base groups (used in smart mailings) the contact will be removed from.
   *
   *
   * @return mixed
   */
function wp_callback_for_civicrm_unsubscribeGroups($op, $mailingId, $contactId, &$groups, &$baseGroups) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_unsubscribeGroups', 'wp_callback_for_civicrm_unsubscribeGroups', 10, 5);

/**
   * This hook is called to drive database upgrades for extension-modules.
   *
   * @param string $op
   *   The type of operation being performed; 'check' or 'enqueue'.
   * @param CRM_Queue_Queue $queue
   *   (for 'enqueue') the modifiable list of pending up upgrade tasks.
   *
   * @return bool|null
   *   NULL, if $op is 'enqueue'.
   *   TRUE, if $op is 'check' and upgrades are pending.
   *   FALSE, if $op is 'check' and upgrades are not pending.
   */
function wp_callback_for_civicrm_upgrade($op, $queue) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_upgrade', 'wp_callback_for_civicrm_upgrade', 10, 2);

/**
   * This hook is invoked during all CiviCRM form validation. An array of errors
   * detected is returned. Else we assume validation succeeded.
   *
   * @param string $formName
   *   The name of the form.
   * @param array &$fields the POST parameters as filtered by QF
   * @param array &$files the FILES parameters as sent in by POST
   * @param array &$form the form object
   * @param array &$errors the array of errors.
   *
   * @return mixed
   *   formRule hooks return a boolean or
   *                           an array of error messages which display a QF Error
   */
function wp_callback_for_civicrm_validateForm($formName, &$fields, &$files, &$form, &$errors) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_validateForm', 'wp_callback_for_civicrm_validateForm', 10, 5);

/**
   * This hook is called while validating a profile form submission.
   *
   * @param string $profileName
   * @return mixed
   */
function wp_callback_for_civicrm_validateProfile($profileName) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_validateProfile', 'wp_callback_for_civicrm_validateProfile', 10, 1);

/**
   * This hook is called while preparing a read-only profile screen
   *
   * @param string $profileName
   * @return mixed
   */
function wp_callback_for_civicrm_viewProfile($profileName) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_viewProfile', 'wp_callback_for_civicrm_viewProfile', 10, 1);

/**
   * This hook is called when building the menu table.
   *
   * @param array $files
   *   The current set of files to process.
   *
   * @return null
   *   the return value is ignored
   */
function wp_callback_for_civicrm_xmlMenu(&$files) {
  $args = get_defined_vars();
  $function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug($function, 'wordpress');
  // _showallthehooks_debug_func_args($function, $args);
}
add_action('civicrm_xmlMenu', 'wp_callback_for_civicrm_xmlMenu', 10, 1);

