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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntIndexDuPereNo3Trait;

/**
 * Index du pere no3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntIndexDuPereNo3TraitTest extends AbstractTestCase {

    /**
     * Tests the setIndexDuPereNo3() method.
     *
     * @return void
     */
    public function testSetIndexDuPereNo3() {

        $obj = new TestIntIndexDuPereNo3Trait();

        $obj->setIndexDuPereNo3(10);
        $this->assertEquals(10, $obj->getIndexDuPereNo3());
    }
}
