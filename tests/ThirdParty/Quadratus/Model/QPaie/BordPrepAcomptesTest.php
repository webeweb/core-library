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

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\BordPrepAcomptes;

/**
 * Bord prep acomptes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class BordPrepAcomptesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new BordPrepAcomptes();

        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getTypePaiement());
    }

    /**
     * Tests the setDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate() {

        // Set a Date/time mock.
        $date = new DateTime("2018-09-10");

        $obj = new BordPrepAcomptes();

        $obj->setDate($date);
        $this->assertSame($date, $obj->getDate());
    }

    /**
     * Tests the setId() method.
     *
     * @return void
     */
    public function testSetId() {

        $obj = new BordPrepAcomptes();

        $obj->setId(10);
        $this->assertEquals(10, $obj->getId());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule() {

        $obj = new BordPrepAcomptes();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setMontant() method.
     *
     * @return void
     */
    public function testSetMontant() {

        $obj = new BordPrepAcomptes();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new BordPrepAcomptes();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new BordPrepAcomptes();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the setTypePaiement() method.
     *
     * @return void
     */
    public function testSetTypePaiement() {

        $obj = new BordPrepAcomptes();

        $obj->setTypePaiement("typePaiement");
        $this->assertEquals("typePaiement", $obj->getTypePaiement());
    }
}
