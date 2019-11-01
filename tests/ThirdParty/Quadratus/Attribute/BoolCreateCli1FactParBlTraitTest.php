<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolCreateCli1FactParBlTrait;

/**
 * Create cli1 fact par b l trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolCreateCli1FactParBlTraitTest extends AbstractTestCase {

    /**
     * Tests the setCreateCli1FactParBl() method.
     *
     * @return void
     */
    public function testSetCreateCli1FactParBl() {

        $obj = new TestBoolCreateCli1FactParBlTrait();

        $obj->setCreateCli1FactParBl(true);
        $this->assertEquals(true, $obj->getCreateCli1FactParBl());
    }
}
