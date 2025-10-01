<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Wsdl2Php\Tests;

use PHPUnit\Framework\TestCase;

/**
 * Abstract test case.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Tests
 * @abstract
 */
abstract class AbstractTestCase extends TestCase {

    /**
     * WSDL.
     *
     * @var string
     */
    protected $wsdl;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a WSDL mock.
        $this->wsdl = realpath(__DIR__ . "/Fixtures/wsdl.xml");
    }
}
