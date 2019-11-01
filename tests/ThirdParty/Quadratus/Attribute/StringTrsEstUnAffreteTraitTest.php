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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTrsEstUnAffreteTrait;

/**
 * T r s est un affrete trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTrsEstUnAffreteTraitTest extends AbstractTestCase {

    /**
     * Tests the setTrsEstUnAffrete() method.
     *
     * @return void
     */
    public function testSetTrsEstUnAffrete() {

        $obj = new TestStringTrsEstUnAffreteTrait();

        $obj->setTrsEstUnAffrete("trsEstUnAffrete");
        $this->assertEquals("trsEstUnAffrete", $obj->getTrsEstUnAffrete());
    }
}
