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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringQualifiant3Trait;

/**
 * Qualifiant3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringQualifiant3TraitTest extends AbstractTestCase {

    /**
     * Tests the setQualifiant3() method.
     *
     * @return void
     */
    public function testSetQualifiant3() {

        $obj = new TestStringQualifiant3Trait();

        $obj->setQualifiant3("qualifiant3");
        $this->assertEquals("qualifiant3", $obj->getQualifiant3());
    }
}
