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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringEcritureNumTrait;

/**
 * Ecriture num trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringEcritureNumTraitTest extends AbstractTestCase {

    /**
     * Tests the setEcritureNum() method.
     *
     * @return void
     */
    public function testSetEcritureNum() {

        $obj = new TestStringEcritureNumTrait();

        $obj->setEcritureNum("ecritureNum");
        $this->assertEquals("ecritureNum", $obj->getEcritureNum());
    }
}
