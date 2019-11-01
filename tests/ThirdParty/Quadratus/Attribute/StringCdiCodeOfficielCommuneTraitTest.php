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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCdiCodeOfficielCommuneTrait;

/**
 * Cdi code officiel commune trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCdiCodeOfficielCommuneTraitTest extends AbstractTestCase {

    /**
     * Tests the setCdiCodeOfficielCommune() method.
     *
     * @return void
     */
    public function testSetCdiCodeOfficielCommune() {

        $obj = new TestStringCdiCodeOfficielCommuneTrait();

        $obj->setCdiCodeOfficielCommune("cdiCodeOfficielCommune");
        $this->assertEquals("cdiCodeOfficielCommune", $obj->getCdiCodeOfficielCommune());
    }
}
