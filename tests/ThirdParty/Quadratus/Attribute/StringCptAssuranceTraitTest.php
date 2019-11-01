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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCptAssuranceTrait;

/**
 * Cpt assurance trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCptAssuranceTraitTest extends AbstractTestCase {

    /**
     * Tests the setCptAssurance() method.
     *
     * @return void
     */
    public function testSetCptAssurance() {

        $obj = new TestStringCptAssuranceTrait();

        $obj->setCptAssurance("cptAssurance");
        $this->assertEquals("cptAssurance", $obj->getCptAssurance());
    }
}
