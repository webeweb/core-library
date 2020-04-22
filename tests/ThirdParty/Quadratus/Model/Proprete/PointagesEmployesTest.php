<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\PointagesEmployes;

/**
 * Pointages employes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class PointagesEmployesTest extends AbstractTestCase {

    /**
     * Tests the setCodeCollaboValid() method.
     *
     * @return void
     */
    public function testSetCodeCollaboValid() {

        $obj = new PointagesEmployes();

        $obj->setCodeCollaboValid("codeCollaboValid");
        $this->assertEquals("codeCollaboValid", $obj->getCodeCollaboValid());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new PointagesEmployes();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye() {

        $obj = new PointagesEmployes();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setCompteurHeures() method.
     *
     * @return void
     */
    public function testSetCompteurHeures() {

        $obj = new PointagesEmployes();

        $obj->setCompteurHeures(10.092018);
        $this->assertEquals(10.092018, $obj->getCompteurHeures());
    }

    /**
     * Tests the setDateValidationSynchro() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateValidationSynchro() {

        // Set a Date/time mock.
        $dateValidationSynchro = new DateTime("2018-09-10");

        $obj = new PointagesEmployes();

        $obj->setDateValidationSynchro($dateValidationSynchro);
        $this->assertSame($dateValidationSynchro, $obj->getDateValidationSynchro());
    }

    /**
     * Tests the setEtat() method.
     *
     * @return void
     */
    public function testSetEtat() {

        $obj = new PointagesEmployes();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests the setHpTheoNonAffectees() method.
     *
     * @return void
     */
    public function testSetHpTheoNonAffectees() {

        $obj = new PointagesEmployes();

        $obj->setHpTheoNonAffectees(10.092018);
        $this->assertEquals(10.092018, $obj->getHpTheoNonAffectees());
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

        $obj = new PointagesEmployes();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the setUniqIdSynchro() method.
     *
     * @return void
     */
    public function testSetUniqIdSynchro() {

        $obj = new PointagesEmployes();

        $obj->setUniqIdSynchro("uniqIdSynchro");
        $this->assertEquals("uniqIdSynchro", $obj->getUniqIdSynchro());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new PointagesEmployes();

        $this->assertNull($obj->getCodeCollaboValid());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCompteurHeures());
        $this->assertNull($obj->getDateValidationSynchro());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getHpTheoNonAffectees());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getUniqIdSynchro());
    }
}
