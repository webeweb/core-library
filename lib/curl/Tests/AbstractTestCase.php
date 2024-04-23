<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Curl\Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;
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
     * @var Configuration|null
     */
    protected $configuration;

    /**
     * Resource path.
     *
     * @var string|null
     */
    protected $resourcePath;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Configuration mock.
        $this->configuration = new Configuration();
        $this->configuration->setHost("https://webeweb.me/");

        // Set a resource path mock.
        $this->resourcePath = "curl-library.php";
    }
}
