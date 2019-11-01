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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringQualifiant2Trait;

/**
 * Qualifiant2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringQualifiant2TraitTest extends AbstractTestCase {

    /**
     * Tests the setQualifiant2() method.
     *
     * @return void
     */
    public function testSetQualifiant2() {

        $obj = new TestStringQualifiant2Trait();

        $obj->setQualifiant2("qualifiant2");
        $this->assertEquals("qualifiant2", $obj->getQualifiant2());
    }
}
