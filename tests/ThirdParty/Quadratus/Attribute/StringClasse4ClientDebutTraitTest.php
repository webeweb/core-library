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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringClasse4ClientDebutTrait;

/**
 * Classe4 client debut trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringClasse4ClientDebutTraitTest extends AbstractTestCase {

    /**
     * Tests the setClasse4ClientDebut() method.
     *
     * @return void
     */
    public function testSetClasse4ClientDebut() {

        $obj = new TestStringClasse4ClientDebutTrait();

        $obj->setClasse4ClientDebut("classe4ClientDebut");
        $this->assertEquals("classe4ClientDebut", $obj->getClasse4ClientDebut());
    }
}
