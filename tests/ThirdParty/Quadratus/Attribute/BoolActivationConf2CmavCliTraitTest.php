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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolActivationConf2CmavCliTrait;

/**
 * Activation conf2 c m a v cli trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolActivationConf2CmavCliTraitTest extends AbstractTestCase {

    /**
     * Tests the setActivationConf2CmavCli() method.
     *
     * @return void
     */
    public function testSetActivationConf2CmavCli() {

        $obj = new TestBoolActivationConf2CmavCliTrait();

        $obj->setActivationConf2CmavCli(true);
        $this->assertEquals(true, $obj->getActivationConf2CmavCli());
    }
}
