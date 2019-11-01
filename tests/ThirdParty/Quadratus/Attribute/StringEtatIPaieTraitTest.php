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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringEtatIPaieTrait;

/**
 * Etat i paie trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringEtatIPaieTraitTest extends AbstractTestCase {

    /**
     * Tests the setEtatIPaie() method.
     *
     * @return void
     */
    public function testSetEtatIPaie() {

        $obj = new TestStringEtatIPaieTrait();

        $obj->setEtatIPaie("etatIPaie");
        $this->assertEquals("etatIPaie", $obj->getEtatIPaie());
    }
}
