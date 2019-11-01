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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNumDossierTrait;

/**
 * Num dossier trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNumDossierTraitTest extends AbstractTestCase {

    /**
     * Tests the setNumDossier() method.
     *
     * @return void
     */
    public function testSetNumDossier() {

        $obj = new TestStringNumDossierTrait();

        $obj->setNumDossier("numDossier");
        $this->assertEquals("numDossier", $obj->getNumDossier());
    }
}
