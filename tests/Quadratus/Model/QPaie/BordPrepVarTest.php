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
use WBW\Library\Core\Quadratus\Model\QPaie\BordPrepVar;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Bord prep var model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class BordPrepVarTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new BordPrepVar();

        $this->assertNull($obj->getCodeModele());
        $this->assertNull($obj->getFlagForce());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getNumCol());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getValeur());
    }

    /**
     * Tests the setCodeModele() method.
     *
     * @return void
     */
    public function testSetCodeModele() {

        $obj = new BordPrepVar();

        $obj->setCodeModele("codeModele");
        $this->assertEquals("codeModele", $obj->getCodeModele());
    }

    /**
     * Tests the setFlagForce() method.
     *
     * @return void
     */
    public function testSetFlagForce() {

        $obj = new BordPrepVar();

        $obj->setFlagForce(true);
        $this->assertEquals(true, $obj->getFlagForce());
    }

    /**
     * Tests the setIndicePeriode() method.
     *
     * @return void
     */
    public function testSetIndicePeriode() {

        $obj = new BordPrepVar();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule() {

        $obj = new BordPrepVar();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setNumCol() method.
     *
     * @return void
     */
    public function testSetNumCol() {

        $obj = new BordPrepVar();

        $obj->setNumCol("numCol");
        $this->assertEquals("numCol", $obj->getNumCol());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new BordPrepVar();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     */
    public function testSetPeriode() {

        $obj = new BordPrepVar();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }

    /**
     * Tests the setValeur() method.
     *
     * @return void
     */
    public function testSetValeur() {

        $obj = new BordPrepVar();

        $obj->setValeur(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur());
    }

}
