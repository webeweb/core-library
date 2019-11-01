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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeConf2CmavCliTrait;

/**
 * Type conf2 c m a v cli trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeConf2CmavCliTraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeConf2CmavCli() method.
     *
     * @return void
     */
    public function testSetTypeConf2CmavCli() {

        $obj = new TestStringTypeConf2CmavCliTrait();

        $obj->setTypeConf2CmavCli("typeConf2CmavCli");
        $this->assertEquals("typeConf2CmavCli", $obj->getTypeConf2CmavCli());
    }
}
