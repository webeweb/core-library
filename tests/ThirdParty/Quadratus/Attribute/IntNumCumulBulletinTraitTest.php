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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntNumCumulBulletinTrait;

/**
 * Num cumul bulletin trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntNumCumulBulletinTraitTest extends AbstractTestCase {

    /**
     * Tests the setNumCumulBulletin() method.
     *
     * @return void
     */
    public function testSetNumCumulBulletin() {

        $obj = new TestIntNumCumulBulletinTrait();

        $obj->setNumCumulBulletin(10);
        $this->assertEquals(10, $obj->getNumCumulBulletin());
    }
}
