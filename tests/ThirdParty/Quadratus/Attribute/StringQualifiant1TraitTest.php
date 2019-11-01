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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringQualifiant1Trait;

/**
 * Qualifiant1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringQualifiant1TraitTest extends AbstractTestCase {

    /**
     * Tests the setQualifiant1() method.
     *
     * @return void
     */
    public function testSetQualifiant1() {

        $obj = new TestStringQualifiant1Trait();

        $obj->setQualifiant1("qualifiant1");
        $this->assertEquals("qualifiant1", $obj->getQualifiant1());
    }
}
