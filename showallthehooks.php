<?php

/**
 * @file
 *
 * Show all hooks in CiviCRM. This file contains debug code and generator code.
 */

require_once 'showallthehooks.hooks.php';

// if WordPress, add hook callbacks file
$config = CRM_Core_Config::singleton();
if ($config->userFramework == 'WordPress') {
  require_once 'showallthehooks.wp.php';
}

/**
 * Extract a list of CiviCRM hooks.
 *
 * @TODO Include extension-provided hooks in results.
 *
 * @return array of ReflectionClass objects.
 */
function _showallthehooks_list_hooks() {
  if (class_exists('Civi\Core\CiviEventInspector')) {
    // Event Inspector is available from PR10161 onwards.
    // https://github.com/civicrm/civicrm-core/pull/10161
    $hooks = [];
    $inspector = new \Civi\Core\CiviEventInspector();
    $allHooks = $inspector->getAll();
    foreach ($allHooks as $hook) {
      if (isset($hook['stub'])) {
        $hooks[] = $hook;
      }
    }
  }
  else {
    $class = new ReflectionClass('CRM_Utils_Hook');
    $hooks = $class->getMethods(ReflectionMethod::IS_STATIC);
    $ignore = ['singleton'];
    $hooks = array_filter($hooks, function($m) use ($ignore) {
      if (isset($m->name) && !in_array($m->name, $ignore)) {
        return TRUE;
      }
    });
  }
  return $hooks;
}

/**
 * Generate debug functions for all hooks.
 */
function _showallthehooks_generate_hooks() {
  $source = '';
  foreach (_showallthehooks_list_hooks() as $hook) {
    $source .= _showallthehooks_generate_hook($hook);
  }
  return <<<EOT
<?php
/**
 * @file
 * This file is generated automatically. It contains example implementations of
 * all core CiviCRM hooks. You can edit it to enable additional debug on any
 * hook.
 *
 * To regenerate, see README.md or https://github.com/fuzionnz/contrib.showallthehooks
 */

{$source}
EOT;
}

/**
 * Generate a debug function for a specific hook.
 */
function _showallthehooks_generate_hook(ReflectionMethod $hook) {
  $prefix = 'showallthehooks_civicrm_';
  $docs = $hook->getDocComment();
  $parameters = $hook->getParameters();

  $params = [];
  foreach ($parameters as $parameter) {
    $params[] =
      $parameter->isPassedByReference() ?
        '&$' . $parameter->getName() :
        '$' . $parameter->getName();
  }
  $params = implode(', ', $params);
  $method_name = $prefix . $hook->getName();

  return <<<EOT

{$hook->getDocComment()}
function {$method_name}({$params}) {
  \$args = get_defined_vars();
  \$function = preg_replace('/showallthehooks/', 'hook', __FUNCTION__);
  _showallthehooks_debug(\$function, 'showallthehooks');
  // _showallthehooks_debug_func_args(\$function, \$args);
}

EOT;
}

/**
 * Generate debug functions for all hooks in WordPress.
 */
function _showallthehooks_generate_hooks_wp() {
  $source = '';
  foreach (_showallthehooks_list_hooks() as $hook) {
    $source .= _showallthehooks_generate_hook_wp($hook);
  }
  return <<<EOT
<?php
/**
 * @file
 * This file is generated automatically. It contains example implementations of
 * all core CiviCRM hooks in WordPress. You can edit it to enable additional
 * debug on any hook.
 *
 * To regenerate, see README.md or https://github.com/fuzionnz/contrib.showallthehooks
 */

{$source}
EOT;
}

/**
 * Generate a debug function for a specific hook in WordPress.
 */
function _showallthehooks_generate_hook_wp(ReflectionMethod $hook) {
  $prefix = 'wp_callback_for_civicrm_';
  $docs = $hook->getDocComment();
  $parameters = $hook->getParameters();

  $params = [];
  foreach ($parameters as $parameter) {
    $params[] =
      $parameter->isPassedByReference() ?
        '&$' . $parameter->getName() :
        '$' . $parameter->getName();
  }
  $parameters = implode(', ', $params);
  $num = count( $params );
  $method_name = $prefix . $hook->getName();

  return <<<EOT

{$hook->getDocComment()}
function {$method_name}({$parameters}) {
  \$args = get_defined_vars();
  \$function = preg_replace('/wp_callback_for/', 'hook', __FUNCTION__);
  _showallthehooks_debug(\$function, 'wordpress');
  // _showallthehooks_debug_func_args(\$function, \$args);
}
add_action('civicrm_{$hook->getName()}', '{$method_name}', 10, {$num});

EOT;
}

/**
 * Debug a single value and its name, the best available way.
 *
 * Report which hooks got called.
 *
 * Show detail on a specific hook. Showing detail on all hooks will probably be
 * excessive - not hard to consume a lot of memory with dpm() and large objects.
 */
function _showallthehooks_debug($param, $name) {
  if (function_exists('dpm')) {
    // dpm() is a Drupal/Backdrop function provided by Devel module.
    dpm($param, $name);
  }
  elseif (function_exists('drupal_set_message')) {
    // drupal_set_message() is a core Drupal function.
    drupal_set_message(t('%name: @param', array('%name' => $name, '@param' => print_r($param, 1))));
  }
  elseif (function_exists('backdrop_set_message')) {
    // backdrop_set_message() is a core Backdrop function.
    backdrop_set_message(t('%name: @param', array('%name' => $name, '@param' => print_r($param, 1))));
  }
  elseif (function_exists('add_action')) {
    // Format for output.
    $output = print_r($param, 1);
    // For WordPress, we stash them in $_SESSION and display when admin_notices called.
    $_SESSION['showallthehooks_messages'][] = [ 'param' => $output, 'name' => $name ];
    add_action('admin_notices', '_showallthehooks_wp_show_notices');
  }
  elseif (class_exists('JFactory')) {
    // Format for output.
    $output = print_r($param, 1);
    // Joomla message display.
    JFactory::getApplication()->enqueueMessage($name . ': ' . $output);
  }
  else {
    // Format for output.
    $output = print_r($param, 1);
    // Core debug method. We probably won't hit this.
    CRM_Core_Session::setStatus($output, $name, 'no-popup');
  }
}

/**
 * Debug a series of function arguments and the called hook.
 */
function _showallthehooks_debug_func_args($function, $args) {
  foreach ($args as $name => $arg) {
    _showallthehooks_debug($arg, $function . ': $' . $name);
  }
}

/**
 * Debug function for WordPress core only.
 */
function _showallthehooks_wp_show_notices($args) {
  if (!empty($_SESSION['showallthehooks_messages'])) {
    foreach ($_SESSION['showallthehooks_messages'] as $message) {
      $messages[] = "{$message['name']}: {$message['param']}";
    }
    $message = '<ul><li>' . implode('</li><li>', $messages) . '</li></ul>';
  }
  print <<<EOT
    <div class="notice notice-info is-dismissible">{$message}</div>
EOT;
  $_SESSION['showallthehooks_messages'] = array();
}
