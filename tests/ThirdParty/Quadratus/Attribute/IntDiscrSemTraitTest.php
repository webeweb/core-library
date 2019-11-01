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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntDiscrSemTrait;

/**
 * Discr sem trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntDiscrSemTraitTest extends AbstractTestCase {

    /**
     * Tests the setDiscrSem() method.
     *
     * @return void
     */
    public function testSetDiscrSem() {

        $obj = new TestIntDiscrSemTrait();

        $obj->setDiscrSem(10);
        $this->assertEquals(10, $obj->getDiscrSem());
    }
}
