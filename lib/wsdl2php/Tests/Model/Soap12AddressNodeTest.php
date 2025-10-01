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

namespace WBW\Library\Wsdl2Php\Tests\Model;

use WBW\Library\Wsdl2Php\Model\Soap12AddressNode;
use WBW\Library\Wsdl2Php\Tests\AbstractTestCase;

/**
 * soap12:address node test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Tests\Model
 */
class Soap12AddressNodeTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("soap12:address", Soap12AddressNode::NODE_NAME);
    }
}
