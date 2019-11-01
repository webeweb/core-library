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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringIdCarteAppelEnv3Trait;

/**
 * I d carte appel env3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringIdCarteAppelEnv3TraitTest extends AbstractTestCase {

    /**
     * Tests the setIdCarteAppelEnv3() method.
     *
     * @return void
     */
    public function testSetIdCarteAppelEnv3() {

        $obj = new TestStringIdCarteAppelEnv3Trait();

        $obj->setIdCarteAppelEnv3("idCarteAppelEnv3");
        $this->assertEquals("idCarteAppelEnv3", $obj->getIdCarteAppelEnv3());
    }
}
