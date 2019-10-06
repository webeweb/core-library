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
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\MensualisationTache;

/**
 * Mensualisation tache model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class MensualisationTacheTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new MensualisationTache();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaboValid());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getDateValidationSynchro());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getHistoMensSaisi());
        $this->assertNull($obj->getMensualisationCalculee());
        $this->assertNull($obj->getMensualisationSaisie());
        $this->assertNull($obj->getMtPrime());
        $this->assertNull($obj->getNbPaniers());
        $this->assertNull($obj->getNumBT());
        $this->assertNull($obj->getPeriodeDebutValidite());
        $this->assertNull($obj->getUniqIDSynchro());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new MensualisationTache();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new MensualisationTache();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new MensualisationTache();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCollaboValid() method.
     *
     * @return void
     */
    public function testSetCodeCollaboValid() {

        $obj = new MensualisationTache();

        $obj->setCodeCollaboValid("codeCollaboValid");
        $this->assertEquals("codeCollaboValid", $obj->getCodeCollaboValid());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new MensualisationTache();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye() {

        $obj = new MensualisationTache();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setCodeTache() method.
     *
     * @return void
     */
    public function testSetCodeTache() {

        $obj = new MensualisationTache();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Tests the setDateValidationSynchro() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateValidationSynchro() {

        $obj = new MensualisationTache();

        $obj->setDateValidationSynchro(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateValidationSynchro());
    }

    /**
     * Tests the setEtat() method.
     *
     * @return void
     */
    public function testSetEtat() {

        $obj = new MensualisationTache();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests the setHistoMensSaisi() method.
     *
     * @return void
     */
    public function testSetHistoMensSaisi() {

        $obj = new MensualisationTache();

        $obj->setHistoMensSaisi(true);
        $this->assertEquals(true, $obj->getHistoMensSaisi());
    }

    /**
     * Tests the setMensualisationCalculee() method.
     *
     * @return void
     */
    public function testSetMensualisationCalculee() {

        $obj = new MensualisationTache();

        $obj->setMensualisationCalculee(10.092018);
        $this->assertEquals(10.092018, $obj->getMensualisationCalculee());
    }

    /**
     * Tests the setMensualisationSaisie() method.
     *
     * @return void
     */
    public function testSetMensualisationSaisie() {

        $obj = new MensualisationTache();

        $obj->setMensualisationSaisie(10.092018);
        $this->assertEquals(10.092018, $obj->getMensualisationSaisie());
    }

    /**
     * Tests the setMtPrime() method.
     *
     * @return void
     */
    public function testSetMtPrime() {

        $obj = new MensualisationTache();

        $obj->setMtPrime(10.092018);
        $this->assertEquals(10.092018, $obj->getMtPrime());
    }

    /**
     * Tests the setNbPaniers() method.
     *
     * @return void
     */
    public function testSetNbPaniers() {

        $obj = new MensualisationTache();

        $obj->setNbPaniers(10.092018);
        $this->assertEquals(10.092018, $obj->getNbPaniers());
    }

    /**
     * Tests the setNumBT() method.
     *
     * @return void
     */
    public function testSetNumBT() {

        $obj = new MensualisationTache();

        $obj->setNumBT(10);
        $this->assertEquals(10, $obj->getNumBT());
    }

    /**
     * Tests the setPeriodeDebutValidite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeDebutValidite() {

        $obj = new MensualisationTache();

        $obj->setPeriodeDebutValidite(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeDebutValidite());
    }

    /**
     * Tests the setUniqIDSynchro() method.
     *
     * @return void
     */
    public function testSetUniqIDSynchro() {

        $obj = new MensualisationTache();

        $obj->setUniqIDSynchro("uniqIDSynchro");
        $this->assertEquals("uniqIDSynchro", $obj->getUniqIDSynchro());
    }
}
