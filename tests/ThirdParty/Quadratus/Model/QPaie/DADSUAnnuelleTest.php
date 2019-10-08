<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\DADSUAnnuelle;

/**
 * D a d s u annuelle model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class DADSUAnnuelleTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DADSUAnnuelle();

        $this->assertNull($obj->getNomFichierDADSU());
        $this->assertNull($obj->getTdsAnnee());
    }

    /**
     * Tests the setNomFichierDADSU() method.
     *
     * @return void
     */
    public function testSetNomFichierDADSU() {

        $obj = new DADSUAnnuelle();

        $obj->setNomFichierDADSU("nomFichierDADSU");
        $this->assertEquals("nomFichierDADSU", $obj->getNomFichierDADSU());
    }

    /**
     * Tests the setTdsAnnee() method.
     *
     * @return void
     */
    public function testSetTdsAnnee() {

        $obj = new DADSUAnnuelle();

        $obj->setTdsAnnee(10);
        $this->assertEquals(10, $obj->getTdsAnnee());
    }
}
