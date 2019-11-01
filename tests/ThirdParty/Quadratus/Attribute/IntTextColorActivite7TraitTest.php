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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntTextColorActivite7Trait;

/**
 * Text color activite7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntTextColorActivite7TraitTest extends AbstractTestCase {

    /**
     * Tests the setTextColorActivite7() method.
     *
     * @return void
     */
    public function testSetTextColorActivite7() {

        $obj = new TestIntTextColorActivite7Trait();

        $obj->setTextColorActivite7(10);
        $this->assertEquals(10, $obj->getTextColorActivite7());
    }
}
