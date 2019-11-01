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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntTextColorActivite6Trait;

/**
 * Text color activite6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntTextColorActivite6TraitTest extends AbstractTestCase {

    /**
     * Tests the setTextColorActivite6() method.
     *
     * @return void
     */
    public function testSetTextColorActivite6() {

        $obj = new TestIntTextColorActivite6Trait();

        $obj->setTextColorActivite6(10);
        $this->assertEquals(10, $obj->getTextColorActivite6());
    }
}
