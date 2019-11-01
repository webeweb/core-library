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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntTextColorActivite9Trait;

/**
 * Text color activite9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntTextColorActivite9TraitTest extends AbstractTestCase {

    /**
     * Tests the setTextColorActivite9() method.
     *
     * @return void
     */
    public function testSetTextColorActivite9() {

        $obj = new TestIntTextColorActivite9Trait();

        $obj->setTextColorActivite9(10);
        $this->assertEquals(10, $obj->getTextColorActivite9());
    }
}
