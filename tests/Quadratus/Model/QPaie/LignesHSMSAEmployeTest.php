<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QPaie;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QPaie\LignesHSMSAEmploye;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Lignes h s m s a employe model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class LignesHSMSAEmployeTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new LignesHSMSAEmploye();

        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeUnite());
        $this->assertNull($obj->getMtHS());
        $this->assertNull($obj->getNbHS());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getNumeroEmploye2());
        $this->assertNull($obj->getPerDeb());
        $this->assertNull($obj->getPeriodeDecla());
        $this->assertNull($obj->getTauxHS());
        $this->assertNull($obj->getTypeRemunHS());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new LignesHSMSAEmploye();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodeUnite() method.
     *
     * @return void
     */
    public function testSetCodeUnite() {

        $obj = new LignesHSMSAEmploye();

        $obj->setCodeUnite("codeUnite");
        $this->assertEquals("codeUnite", $obj->getCodeUnite());
    }

    /**
     * Tests the setMtHS() method.
     *
     * @return void
     */
    public function testSetMtHS() {

        $obj = new LignesHSMSAEmploye();

        $obj->setMtHS(10);
        $this->assertEquals(10, $obj->getMtHS());
    }

    /**
     * Tests the setNbHS() method.
     *
     * @return void
     */
    public function testSetNbHS() {

        $obj = new LignesHSMSAEmploye();

        $obj->setNbHS(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHS());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne() {

        $obj = new LignesHSMSAEmploye();

        $obj->setNumLigne("numLigne");
        $this->assertEquals("numLigne", $obj->getNumLigne());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new LignesHSMSAEmploye();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setNumeroEmploye2() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye2() {

        $obj = new LignesHSMSAEmploye();

        $obj->setNumeroEmploye2("numeroEmploye2");
        $this->assertEquals("numeroEmploye2", $obj->getNumeroEmploye2());
    }

    /**
     * Tests the setPerDeb() method.
     *
     * @return void
     */
    public function testSetPerDeb() {

        $obj = new LignesHSMSAEmploye();

        $obj->setPerDeb(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPerDeb());
    }

    /**
     * Tests the setPeriodeDecla() method.
     *
     * @return void
     */
    public function testSetPeriodeDecla() {

        $obj = new LignesHSMSAEmploye();

        $obj->setPeriodeDecla(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeDecla());
    }

    /**
     * Tests the setTauxHS() method.
     *
     * @return void
     */
    public function testSetTauxHS() {

        $obj = new LignesHSMSAEmploye();

        $obj->setTauxHS(10);
        $this->assertEquals(10, $obj->getTauxHS());
    }

    /**
     * Tests the setTypeRemunHS() method.
     *
     * @return void
     */
    public function testSetTypeRemunHS() {

        $obj = new LignesHSMSAEmploye();

        $obj->setTypeRemunHS("typeRemunHS");
        $this->assertEquals("typeRemunHS", $obj->getTypeRemunHS());
    }

}
