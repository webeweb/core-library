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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\MensualisationTacheAvenants;

/**
 * Mensualisation tache avenants model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class MensualisationTacheAvenantsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new MensualisationTacheAvenants();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getHistoMensSaisi());
        $this->assertNull($obj->getMensualisationCalculee());
        $this->assertNull($obj->getMensualisationSaisie());
        $this->assertNull($obj->getNumBT());
        $this->assertNull($obj->getNumeroAvenant());
        $this->assertNull($obj->getPeriodeDebutValidite());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new MensualisationTacheAvenants();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new MensualisationTacheAvenants();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new MensualisationTacheAvenants();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye() {

        $obj = new MensualisationTacheAvenants();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setCodeTache() method.
     *
     * @return void
     */
    public function testSetCodeTache() {

        $obj = new MensualisationTacheAvenants();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Tests the setHistoMensSaisi() method.
     *
     * @return void
     */
    public function testSetHistoMensSaisi() {

        $obj = new MensualisationTacheAvenants();

        $obj->setHistoMensSaisi(true);
        $this->assertEquals(true, $obj->getHistoMensSaisi());
    }

    /**
     * Tests the setMensualisationCalculee() method.
     *
     * @return void
     */
    public function testSetMensualisationCalculee() {

        $obj = new MensualisationTacheAvenants();

        $obj->setMensualisationCalculee(10.092018);
        $this->assertEquals(10.092018, $obj->getMensualisationCalculee());
    }

    /**
     * Tests the setMensualisationSaisie() method.
     *
     * @return void
     */
    public function testSetMensualisationSaisie() {

        $obj = new MensualisationTacheAvenants();

        $obj->setMensualisationSaisie(10.092018);
        $this->assertEquals(10.092018, $obj->getMensualisationSaisie());
    }

    /**
     * Tests the setNumBT() method.
     *
     * @return void
     */
    public function testSetNumBT() {

        $obj = new MensualisationTacheAvenants();

        $obj->setNumBT(10);
        $this->assertEquals(10, $obj->getNumBT());
    }

    /**
     * Tests the setNumeroAvenant() method.
     *
     * @return void
     */
    public function testSetNumeroAvenant() {

        $obj = new MensualisationTacheAvenants();

        $obj->setNumeroAvenant(10);
        $this->assertEquals(10, $obj->getNumeroAvenant());
    }

    /**
     * Tests the setPeriodeDebutValidite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeDebutValidite() {

        $obj = new MensualisationTacheAvenants();

        $obj->setPeriodeDebutValidite(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeDebutValidite());
    }
}
