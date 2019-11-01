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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntNbCedageEditesFactTrait;

/**
 * Nb cedage edites fact trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntNbCedageEditesFactTraitTest extends AbstractTestCase {

    /**
     * Tests the setNbCedageEditesFact() method.
     *
     * @return void
     */
    public function testSetNbCedageEditesFact() {

        $obj = new TestIntNbCedageEditesFactTrait();

        $obj->setNbCedageEditesFact(10);
        $this->assertEquals(10, $obj->getNbCedageEditesFact());
    }
}
