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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntIndexDuPereNo5Trait;

/**
 * Index du pere no5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntIndexDuPereNo5TraitTest extends AbstractTestCase {

    /**
     * Tests the setIndexDuPereNo5() method.
     *
     * @return void
     */
    public function testSetIndexDuPereNo5() {

        $obj = new TestIntIndexDuPereNo5Trait();

        $obj->setIndexDuPereNo5(10);
        $this->assertEquals(10, $obj->getIndexDuPereNo5());
    }
}
