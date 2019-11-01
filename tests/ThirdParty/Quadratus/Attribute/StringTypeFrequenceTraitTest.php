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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeFrequenceTrait;

/**
 * Type frequence trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeFrequenceTraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeFrequence() method.
     *
     * @return void
     */
    public function testSetTypeFrequence() {

        $obj = new TestStringTypeFrequenceTrait();

        $obj->setTypeFrequence("typeFrequence");
        $this->assertEquals("typeFrequence", $obj->getTypeFrequence());
    }
}
