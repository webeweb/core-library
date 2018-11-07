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
use WBW\Library\Core\Quadratus\Model\QPaie\LignesAttestationExtras;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Lignes attestation extras model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class LignesAttestationExtrasTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new LignesAttestationExtras();

        $this->assertNull($obj->getDateDebut());
        $this->assertNull($obj->getDateFin());
        $this->assertNull($obj->getMontantICCP());
        $this->assertNull($obj->getMontantIPE());
        $this->assertNull($obj->getMontantPrecompte());
        $this->assertNull($obj->getNbHeureTrav());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumeroAttestation());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getSalaireBrut());
    }

    /**
     * Tests the setDateDebut() method.
     *
     * @return void
     */
    public function testSetDateDebut() {

        $obj = new LignesAttestationExtras();

        $obj->setDateDebut(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebut());
    }

    /**
     * Tests the setDateFin() method.
     *
     * @return void
     */
    public function testSetDateFin() {

        $obj = new LignesAttestationExtras();

        $obj->setDateFin(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFin());
    }

    /**
     * Tests the setMontantICCP() method.
     *
     * @return void
     */
    public function testSetMontantICCP() {

        $obj = new LignesAttestationExtras();

        $obj->setMontantICCP(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantICCP());
    }

    /**
     * Tests the setMontantIPE() method.
     *
     * @return void
     */
    public function testSetMontantIPE() {

        $obj = new LignesAttestationExtras();

        $obj->setMontantIPE(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantIPE());
    }

    /**
     * Tests the setMontantPrecompte() method.
     *
     * @return void
     */
    public function testSetMontantPrecompte() {

        $obj = new LignesAttestationExtras();

        $obj->setMontantPrecompte(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantPrecompte());
    }

    /**
     * Tests the setNbHeureTrav() method.
     *
     * @return void
     */
    public function testSetNbHeureTrav() {

        $obj = new LignesAttestationExtras();

        $obj->setNbHeureTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureTrav());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne() {

        $obj = new LignesAttestationExtras();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setNumeroAttestation() method.
     *
     * @return void
     */
    public function testSetNumeroAttestation() {

        $obj = new LignesAttestationExtras();

        $obj->setNumeroAttestation("numeroAttestation");
        $this->assertEquals("numeroAttestation", $obj->getNumeroAttestation());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new LignesAttestationExtras();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setSalaireBrut() method.
     *
     * @return void
     */
    public function testSetSalaireBrut() {

        $obj = new LignesAttestationExtras();

        $obj->setSalaireBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getSalaireBrut());
    }

}
