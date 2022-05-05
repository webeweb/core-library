<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Curl\Tests;

use WBW\Library\Core\Tests\AbstractTestCase as BaseTestCase;
use WBW\Library\Curl\Configuration\Configuration;

/**
 * Abstract test case.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Curl\Tests
 * @abstract
 */
abstract class AbstractTestCase extends BaseTestCase {

    /**
     * Configuration.
     *
     * @var Configuration
     */
    protected $curlConfiguration;

    /**
     * cURL resource path.
     *
     * @var string
     */
    protected $curlResourcePath;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Configuration mock.
        $this->curlConfiguration = new Configuration();
        $this->curlConfiguration->setHost("https://webeweb.dev/");

        // Set a rresource path mock.
        $this->curlResourcePath = "curl-library.php";
    }
}
