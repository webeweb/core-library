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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringIdCarteAppelEnv2Trait;

/**
 * I d carte appel env2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringIdCarteAppelEnv2TraitTest extends AbstractTestCase {

    /**
     * Tests the setIdCarteAppelEnv2() method.
     *
     * @return void
     */
    public function testSetIdCarteAppelEnv2() {

        $obj = new TestStringIdCarteAppelEnv2Trait();

        $obj->setIdCarteAppelEnv2("idCarteAppelEnv2");
        $this->assertEquals("idCarteAppelEnv2", $obj->getIdCarteAppelEnv2());
    }
}
