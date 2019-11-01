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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringRisqueAtTrait;

/**
 * Risque a t trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringRisqueAtTraitTest extends AbstractTestCase {

    /**
     * Tests the setRisqueAt() method.
     *
     * @return void
     */
    public function testSetRisqueAt() {

        $obj = new TestStringRisqueAtTrait();

        $obj->setRisqueAt("risqueAt");
        $this->assertEquals("risqueAt", $obj->getRisqueAt());
    }
}
