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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntIndexDuPereNo7Trait;

/**
 * Index du pere no7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntIndexDuPereNo7TraitTest extends AbstractTestCase {

    /**
     * Tests the setIndexDuPereNo7() method.
     *
     * @return void
     */
    public function testSetIndexDuPereNo7() {

        $obj = new TestIntIndexDuPereNo7Trait();

        $obj->setIndexDuPereNo7(10);
        $this->assertEquals(10, $obj->getIndexDuPereNo7());
    }
}
