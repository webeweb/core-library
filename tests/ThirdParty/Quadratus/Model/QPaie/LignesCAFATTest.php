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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\LignesCAFAT;

/**
 * Lignes c a f a t model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class LignesCAFATTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new LignesCAFAT();

        $this->assertNull($obj->getCodeCommune());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getDateDebauchage());
        $this->assertNull($obj->getDateEmbauchage());
        $this->assertNull($obj->getNbHTrav());
        $this->assertNull($obj->getNoET());
        $this->assertNull($obj->getNomEmploye());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumeroAssure());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getOrganisme());
        $this->assertNull($obj->getPeriodeDecla());
        $this->assertNull($obj->getSalaireBrut());
        $this->assertNull($obj->getTauxAT());
    }

    /**
     * Tests the setCodeCommune() method.
     *
     * @return void
     */
    public function testSetCodeCommune() {

        $obj = new LignesCAFAT();

        $obj->setCodeCommune("codeCommune");
        $this->assertEquals("codeCommune", $obj->getCodeCommune());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new LignesCAFAT();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setDateDebauchage() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebauchage() {

        $obj = new LignesCAFAT();

        $obj->setDateDebauchage(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebauchage());
    }

    /**
     * Tests the setDateEmbauchage() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEmbauchage() {

        $obj = new LignesCAFAT();

        $obj->setDateEmbauchage(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateEmbauchage());
    }

    /**
     * Tests the setNbHTrav() method.
     *
     * @return void
     */
    public function testSetNbHTrav() {

        $obj = new LignesCAFAT();

        $obj->setNbHTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHTrav());
    }

    /**
     * Tests the setNoET() method.
     *
     * @return void
     */
    public function testSetNoET() {

        $obj = new LignesCAFAT();

        $obj->setNoET("noET");
        $this->assertEquals("noET", $obj->getNoET());
    }

    /**
     * Tests the setNomEmploye() method.
     *
     * @return void
     */
    public function testSetNomEmploye() {

        $obj = new LignesCAFAT();

        $obj->setNomEmploye("nomEmploye");
        $this->assertEquals("nomEmploye", $obj->getNomEmploye());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne() {

        $obj = new LignesCAFAT();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setNumeroAssure() method.
     *
     * @return void
     */
    public function testSetNumeroAssure() {

        $obj = new LignesCAFAT();

        $obj->setNumeroAssure("numeroAssure");
        $this->assertEquals("numeroAssure", $obj->getNumeroAssure());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new LignesCAFAT();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setOrganisme() method.
     *
     * @return void
     */
    public function testSetOrganisme() {

        $obj = new LignesCAFAT();

        $obj->setOrganisme("organisme");
        $this->assertEquals("organisme", $obj->getOrganisme());
    }

    /**
     * Tests the setPeriodeDecla() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeDecla() {

        $obj = new LignesCAFAT();

        $obj->setPeriodeDecla(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeDecla());
    }

    /**
     * Tests the setSalaireBrut() method.
     *
     * @return void
     */
    public function testSetSalaireBrut() {

        $obj = new LignesCAFAT();

        $obj->setSalaireBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getSalaireBrut());
    }

    /**
     * Tests the setTauxAT() method.
     *
     * @return void
     */
    public function testSetTauxAT() {

        $obj = new LignesCAFAT();

        $obj->setTauxAT(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxAT());
    }
}
