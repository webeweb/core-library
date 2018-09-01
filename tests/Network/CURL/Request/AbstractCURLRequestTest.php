<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Network\CURL\Request;

use WBW\Library\Core\Network\CURL\Configuration\CURLConfiguration;
use WBW\Library\Core\Tests\Cases\AbstractCoreFrameworkTestCase;

/**
 * Abstract cURL request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Network\CURL\Request
 * @abstract
 */
abstract class AbstractCURLRequestTest extends AbstractCoreFrameworkTestCase {

    /**
     * Resource path.
     */
    const RESOURCE_PATH = "/testCall.php";

    /**
     * cURL configuration.
     *
     * @var CURLConfiguration
     */
    protected $configuration;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a cURL configuration mock.
        $this->configuration = new CURLConfiguration();
        $this->configuration->setHost("https://webeweb.fr/");
    }

}
