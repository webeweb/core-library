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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNomFichierTrait;

/**
 * Nom fichier trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNomFichierTraitTest extends AbstractTestCase {

    /**
     * Tests the setNomFichier() method.
     *
     * @return void
     */
    public function testSetNomFichier() {

        $obj = new TestStringNomFichierTrait();

        $obj->setNomFichier("nomFichier");
        $this->assertEquals("nomFichier", $obj->getNomFichier());
    }
}
