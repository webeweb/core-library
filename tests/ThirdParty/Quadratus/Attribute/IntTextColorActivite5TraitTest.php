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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntTextColorActivite5Trait;

/**
 * Text color activite5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntTextColorActivite5TraitTest extends AbstractTestCase {

    /**
     * Tests the setTextColorActivite5() method.
     *
     * @return void
     */
    public function testSetTextColorActivite5() {

        $obj = new TestIntTextColorActivite5Trait();

        $obj->setTextColorActivite5(10);
        $this->assertEquals(10, $obj->getTextColorActivite5());
    }
}
