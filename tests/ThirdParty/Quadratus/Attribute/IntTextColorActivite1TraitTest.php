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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntTextColorActivite1Trait;

/**
 * Text color activite1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntTextColorActivite1TraitTest extends AbstractTestCase {

    /**
     * Tests the setTextColorActivite1() method.
     *
     * @return void
     */
    public function testSetTextColorActivite1() {

        $obj = new TestIntTextColorActivite1Trait();

        $obj->setTextColorActivite1(10);
        $this->assertEquals(10, $obj->getTextColorActivite1());
    }
}
