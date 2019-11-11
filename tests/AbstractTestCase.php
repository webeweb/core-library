<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests;

use PHPUnit\Framework\TestCase;
use WBW\Library\Core\Network\CURL\Configuration\CurlConfiguration;
use WBW\Library\Core\Security\Authenticator;
use WBW\Library\Core\Security\PasswordAuthentication;

/**
 * Abstract test case.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests
 * @abstract
 */
abstract class AbstractTestCase extends TestCase {

    /**
     * Authenticator.
     *
     * @var Authenticator
     */
    protected $authenticator;

    /**
     * cURL configuration.
     *
     * @var CurlConfiguration
     */
    protected $curlConfiguration;

    /**
     * cURL resource path.
     *
     * @var string
     */
    protected $curlResourcePath = "curl-library.php";

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set an Authenticator mock.
        $this->authenticator = new Authenticator("localhost", new PasswordAuthentication("username", "password"));

        // Set a cURL configuration mock.
        $this->curlConfiguration = new CurlConfiguration();
        $this->curlConfiguration->setHost("https://webeweb.dev/");
    }
}
