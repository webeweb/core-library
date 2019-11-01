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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringPortablePersoTrait;

/**
 * Portable perso trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringPortablePersoTraitTest extends AbstractTestCase {

    /**
     * Tests the setPortablePerso() method.
     *
     * @return void
     */
    public function testSetPortablePerso() {

        $obj = new TestStringPortablePersoTrait();

        $obj->setPortablePerso("portablePerso");
        $this->assertEquals("portablePerso", $obj->getPortablePerso());
    }
}
