<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app.config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
 
	Router::connect('/echo.php', array('controller' => 'echo', 'action' => 'doEcho'));
	
	Router::connect('/template.php', array('controller' => 'echo', 'action' => 'template'));

	Router::connect('/redirect.php', array('controller' => 'echo', 'action' => 'doRedirect'));

	Router::connect('/rewrite/*', array('controller' => 'echo', 'action' => 'rewrite'));
	
	Router::connect('/mysql.php', array('controller' => 'mysql', 'action' => 'index'));