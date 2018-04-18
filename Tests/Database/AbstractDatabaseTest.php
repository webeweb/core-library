<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Database;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Security\Authenticator;
use WBW\Library\Core\Security\PasswordAuthentication;

/**
 * Abstract database test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Database
 * @abstract
 */
abstract class AbstractDatabaseTest extends PHPUnit_Framework_TestCase {

    /**
     * Authenticator.
     *
     * @var Authenticator
     */
    protected $authenticator;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {

        // Set an Authenticator mock.
        $this->authenticator = new Authenticator("localhost", new PasswordAuthentication("username", "password"));
    }

}
