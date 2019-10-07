<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\TableauxPaiements;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Tableaux paiements model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class TableauxPaiementsTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TableauxPaiements();

        $this->assertNull($obj->getAssurance());
        $this->assertNull($obj->getCodeTVA());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getEntretien());
        $this->assertNull($obj->getLoyerHT());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumeroCB());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getNumeroDeuxCB());
        $this->assertNull($obj->getValeurRachat());
    }

    /**
     * Tests the setAssurance() method.
     *
     * @return void
     */
    public function testSetAssurance() {

        $obj = new TableauxPaiements();

        $obj->setAssurance(10.092018);
        $this->assertEquals(10.092018, $obj->getAssurance());
    }

    /**
     * Tests the setCodeTVA() method.
     *
     * @return void
     */
    public function testSetCodeTVA() {

        $obj = new TableauxPaiements();

        $obj->setCodeTVA("codeTVA");
        $this->assertEquals("codeTVA", $obj->getCodeTVA());
    }

    /**
     * Tests the setDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate() {

        $obj = new TableauxPaiements();

        $obj->setDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDate());
    }

    /**
     * Tests the setEntretien() method.
     *
     * @return void
     */
    public function testSetEntretien() {

        $obj = new TableauxPaiements();

        $obj->setEntretien(10.092018);
        $this->assertEquals(10.092018, $obj->getEntretien());
    }

    /**
     * Tests the setLoyerHT() method.
     *
     * @return void
     */
    public function testSetLoyerHT() {

        $obj = new TableauxPaiements();

        $obj->setLoyerHT(10.092018);
        $this->assertEquals(10.092018, $obj->getLoyerHT());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne() {

        $obj = new TableauxPaiements();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setNumeroCB() method.
     *
     * @return void
     */
    public function testSetNumeroCB() {

        $obj = new TableauxPaiements();

        $obj->setNumeroCB(10);
        $this->assertEquals(10, $obj->getNumeroCB());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte() {

        $obj = new TableauxPaiements();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests the setNumeroDeuxCB() method.
     *
     * @return void
     */
    public function testSetNumeroDeuxCB() {

        $obj = new TableauxPaiements();

        $obj->setNumeroDeuxCB(10);
        $this->assertEquals(10, $obj->getNumeroDeuxCB());
    }

    /**
     * Tests the setValeurRachat() method.
     *
     * @return void
     */
    public function testSetValeurRachat() {

        $obj = new TableauxPaiements();

        $obj->setValeurRachat(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurRachat());
    }
}
