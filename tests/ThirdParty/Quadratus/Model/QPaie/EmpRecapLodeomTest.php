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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\EmpRecapLodeom;

/**
 * Emp recap lodeom test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class EmpRecapLodeomTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new EmpRecapLodeom();

        $this->assertNull($obj->getBrut());
        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getDifference());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getNbhr());
        $this->assertNull($obj->getNomEmploye());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getReducBul());
        $this->assertNull($obj->getReducRecalc());
        $this->assertNull($obj->getShb());
    }

    /**
     * Tests the setBrut() method.
     *
     * @return void
     */
    public function testSetBrut() {

        $obj = new EmpRecapLodeom();

        $obj->setBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getBrut());
    }

    /**
     * Tests the setCodeCentre() method.
     *
     * @return void
     */
    public function testSetCodeCentre() {

        $obj = new EmpRecapLodeom();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new EmpRecapLodeom();

        $obj->setCodeEtablissement("codeEtablissement");
        $this->assertEquals("codeEtablissement", $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodeOrganisme() method.
     *
     * @return void
     */
    public function testSetCodeOrganisme() {

        $obj = new EmpRecapLodeom();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Tests the setDifference() method.
     *
     * @return void
     */
    public function testSetDifference() {

        $obj = new EmpRecapLodeom();

        $obj->setDifference(10.092018);
        $this->assertEquals(10.092018, $obj->getDifference());
    }

    /**
     * Tests the setIndicePeriode() method.
     *
     * @return void
     */
    public function testSetIndicePeriode() {

        $obj = new EmpRecapLodeom();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests the setNbhr() method.
     *
     * @return void
     */
    public function testSetNbhr() {

        $obj = new EmpRecapLodeom();

        $obj->setNbhr(10.092018);
        $this->assertEquals(10.092018, $obj->getNbhr());
    }

    /**
     * Tests the setNomEmploye() method.
     *
     * @return void
     */
    public function testSetNomEmploye() {

        $obj = new EmpRecapLodeom();

        $obj->setNomEmploye("nomEmploye");
        $this->assertEquals("nomEmploye", $obj->getNomEmploye());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new EmpRecapLodeom();

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

        $obj = new EmpRecapLodeom();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the setReducBul() method.
     *
     * @return void
     */
    public function testSetReducBul() {

        $obj = new EmpRecapLodeom();

        $obj->setReducBul(10.092018);
        $this->assertEquals(10.092018, $obj->getReducBul());
    }

    /**
     * Tests the setReducRecalc() method.
     *
     * @return void
     */
    public function testSetReducRecalc() {

        $obj = new EmpRecapLodeom();

        $obj->setReducRecalc(10.092018);
        $this->assertEquals(10.092018, $obj->getReducRecalc());
    }

    /**
     * Tests the setShb() method.
     *
     * @return void
     */
    public function testSetShb() {

        $obj = new EmpRecapLodeom();

        $obj->setShb(10.092018);
        $this->assertEquals(10.092018, $obj->getShb());
    }
}
