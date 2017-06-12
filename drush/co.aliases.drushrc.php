<?php
  /**
   * Pantheon drush alias file, to be placed in your ~/.drush directory or the aliases
   * directory of your local Drush home. Once it's in place, clear drush cache:
   *
   * drush cc drush
   *
   * To see all your available aliases:
   *
   * drush sa
   *
   * See http://helpdesk.getpantheon.com/customer/portal/articles/411388 for details.
   */

  $aliases['test'] = array(
    'uri' => 'test-coraggio.pantheonsite.io',
    'db-url' => 'mysql://pantheon:0050e1dbb4964b73a8ff79a38e3186c7@dbserver.test.3d7bb5e2-ca5e-4bfe-9a5c-3ed1073e3c14.drush.in:18410/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.test.3d7bb5e2-ca5e-4bfe-9a5c-3ed1073e3c14.drush.in',
    'remote-user' => 'test.3d7bb5e2-ca5e-4bfe-9a5c-3ed1073e3c14',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['live'] = array(
    'uri' => 'live-coraggio.pantheonsite.io',
    'db-url' => 'mysql://pantheon:4d940818358a4e21995329d54f000f24@dbserver.live.3d7bb5e2-ca5e-4bfe-9a5c-3ed1073e3c14.drush.in:25723/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.live.3d7bb5e2-ca5e-4bfe-9a5c-3ed1073e3c14.drush.in',
    'remote-user' => 'live.3d7bb5e2-ca5e-4bfe-9a5c-3ed1073e3c14',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['dev'] = array(
    'uri' => 'dev-coraggio.pantheonsite.io',
    'db-url' => 'mysql://pantheon:04683e93d44246a7ac3cc78bc68ecc31@dbserver.dev.3d7bb5e2-ca5e-4bfe-9a5c-3ed1073e3c14.drush.in:12969/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.dev.3d7bb5e2-ca5e-4bfe-9a5c-3ed1073e3c14.drush.in',
    'remote-user' => 'dev.3d7bb5e2-ca5e-4bfe-9a5c-3ed1073e3c14',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
   );
