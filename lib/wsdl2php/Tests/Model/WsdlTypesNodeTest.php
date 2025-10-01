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

use WBW\Library\Wsdl2Php\Model\WsdlTypesNode;
use WBW\Library\Wsdl2Php\Tests\AbstractTestCase;

/**
 * wsdl:types node test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Tests\Model
 */
class WsdlTypesNodeTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wsdl:types", WsdlTypesNode::NODE_NAME);
    }
}
