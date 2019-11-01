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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolAvecEnteteTrait;

/**
 * Avec entete trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolAvecEnteteTraitTest extends AbstractTestCase {

    /**
     * Tests the setAvecEntete() method.
     *
     * @return void
     */
    public function testSetAvecEntete() {

        $obj = new TestBoolAvecEnteteTrait();

        $obj->setAvecEntete(true);
        $this->assertEquals(true, $obj->getAvecEntete());
    }
}
