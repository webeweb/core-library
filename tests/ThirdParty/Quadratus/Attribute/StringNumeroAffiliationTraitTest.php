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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNumeroAffiliationTrait;

/**
 * Numero affiliation trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNumeroAffiliationTraitTest extends AbstractTestCase {

    /**
     * Tests the setNumeroAffiliation() method.
     *
     * @return void
     */
    public function testSetNumeroAffiliation() {

        $obj = new TestStringNumeroAffiliationTrait();

        $obj->setNumeroAffiliation("numeroAffiliation");
        $this->assertEquals("numeroAffiliation", $obj->getNumeroAffiliation());
    }
}
