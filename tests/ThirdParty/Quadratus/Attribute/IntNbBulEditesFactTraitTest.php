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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntNbBulEditesFactTrait;

/**
 * Nb bul edites fact trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntNbBulEditesFactTraitTest extends AbstractTestCase {

    /**
     * Tests the setNbBulEditesFact() method.
     *
     * @return void
     */
    public function testSetNbBulEditesFact() {

        $obj = new TestIntNbBulEditesFactTrait();

        $obj->setNbBulEditesFact(10);
        $this->assertEquals(10, $obj->getNbBulEditesFact());
    }
}
