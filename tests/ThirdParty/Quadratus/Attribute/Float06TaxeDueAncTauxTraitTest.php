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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloat06TaxeDueAncTauxTrait;

/**
 * 06 taxe due anc taux trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Float06TaxeDueAncTauxTraitTest extends AbstractTestCase {

    /**
     * Tests the set06TaxeDueAncTaux() method.
     *
     * @return void
     */
    public function testSet06TaxeDueAncTaux() {

        $obj = new TestFloat06TaxeDueAncTauxTrait();

        $obj->set06TaxeDueAncTaux(10.092018);
        $this->assertEquals(10.092018, $obj->get06TaxeDueAncTaux());
    }
}
