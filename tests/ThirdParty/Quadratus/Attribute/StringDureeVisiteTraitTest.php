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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDureeVisiteTrait;

/**
 * Duree visite trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDureeVisiteTraitTest extends AbstractTestCase {

    /**
     * Tests the setDureeVisite() method.
     *
     * @return void
     */
    public function testSetDureeVisite() {

        $obj = new TestStringDureeVisiteTrait();

        $obj->setDureeVisite("dureeVisite");
        $this->assertEquals("dureeVisite", $obj->getDureeVisite());
    }
}
