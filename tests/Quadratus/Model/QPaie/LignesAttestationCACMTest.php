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
use WBW\Library\Core\Quadratus\Model\QPaie\LignesAttestationCACM;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Lignes attestation c a c m model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class LignesAttestationCACMTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new LignesAttestationCACM();

        $this->assertNull($obj->getDateDebut());
        $this->assertNull($obj->getDateFin());
        $this->assertNull($obj->getDatePaiement());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getMontantPrecompte());
        $this->assertNull($obj->getNbHeureTrav());
        $this->assertNull($obj->getNbJourTrav());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumeroAttestation());
        $this->assertNull($obj->getSalaireBrut());
        $this->assertNull($obj->getTypeLigne());
    }

    /**
     * Tests the setDateDebut() method.
     *
     * @return void
     */
    public function testSetDateDebut() {

        $obj = new LignesAttestationCACM();

        $obj->setDateDebut(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebut());
    }

    /**
     * Tests the setDateFin() method.
     *
     * @return void
     */
    public function testSetDateFin() {

        $obj = new LignesAttestationCACM();

        $obj->setDateFin(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFin());
    }

    /**
     * Tests the setDatePaiement() method.
     *
     * @return void
     */
    public function testSetDatePaiement() {

        $obj = new LignesAttestationCACM();

        $obj->setDatePaiement(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDatePaiement());
    }

    /**
     * Tests the setMontant() method.
     *
     * @return void
     */
    public function testSetMontant() {

        $obj = new LignesAttestationCACM();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Tests the setMontantPrecompte() method.
     *
     * @return void
     */
    public function testSetMontantPrecompte() {

        $obj = new LignesAttestationCACM();

        $obj->setMontantPrecompte(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantPrecompte());
    }

    /**
     * Tests the setNbHeureTrav() method.
     *
     * @return void
     */
    public function testSetNbHeureTrav() {

        $obj = new LignesAttestationCACM();

        $obj->setNbHeureTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureTrav());
    }

    /**
     * Tests the setNbJourTrav() method.
     *
     * @return void
     */
    public function testSetNbJourTrav() {

        $obj = new LignesAttestationCACM();

        $obj->setNbJourTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourTrav());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne() {

        $obj = new LignesAttestationCACM();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setNumeroAttestation() method.
     *
     * @return void
     */
    public function testSetNumeroAttestation() {

        $obj = new LignesAttestationCACM();

        $obj->setNumeroAttestation("numeroAttestation");
        $this->assertEquals("numeroAttestation", $obj->getNumeroAttestation());
    }

    /**
     * Tests the setSalaireBrut() method.
     *
     * @return void
     */
    public function testSetSalaireBrut() {

        $obj = new LignesAttestationCACM();

        $obj->setSalaireBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getSalaireBrut());
    }

    /**
     * Tests the setTypeLigne() method.
     *
     * @return void
     */
    public function testSetTypeLigne() {

        $obj = new LignesAttestationCACM();

        $obj->setTypeLigne(10);
        $this->assertEquals(10, $obj->getTypeLigne());
    }

}
