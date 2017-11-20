<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Exception\Response;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Exception\Response\RedirectResponseException;

/**
 * Redirect response exception test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Exception\Response
 * @final
 */
final class RedirectResponseExceptionTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$ex = new RedirectResponseException("", "RedirectResponseException");
		$this->assertEquals("RedirectResponseException", $ex->getMessage());
		$this->assertEquals("", $ex->getRoute());
	}

}
