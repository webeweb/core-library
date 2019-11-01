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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTvaEtabNomRsTrait;

/**
 * T v a etab_ nom r s trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTvaEtabNomRsTraitTest extends AbstractTestCase {

    /**
     * Tests the setTvaEtabNomRs() method.
     *
     * @return void
     */
    public function testSetTvaEtabNomRs() {

        $obj = new TestStringTvaEtabNomRsTrait();

        $obj->setTvaEtabNomRs("tvaEtabNomRs");
        $this->assertEquals("tvaEtabNomRs", $obj->getTvaEtabNomRs());
    }
}
