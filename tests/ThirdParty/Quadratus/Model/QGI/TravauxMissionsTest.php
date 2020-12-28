<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\TravauxMissions;

/**
 * Travaux missions test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class TravauxMissionsTest extends AbstractTestCase {

    /**
     * Tests the setCodeArticle() method.
     *
     * @return void
     */
    public function testSetCodeArticle(): void {

        $obj = new TravauxMissions();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new TravauxMissions();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeTache() method.
     *
     * @return void
     */
    public function testSetCodeTache(): void {

        $obj = new TravauxMissions();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Tests the setCodeTravail() method.
     *
     * @return void
     */
    public function testSetCodeTravail(): void {

        $obj = new TravauxMissions();

        $obj->setCodeTravail("codeTravail");
        $this->assertEquals("codeTravail", $obj->getCodeTravail());
    }

    /**
     * Tests the setDeclarationARediger() method.
     *
     * @return void
     */
    public function testSetDeclarationARediger(): void {

        $obj = new TravauxMissions();

        $obj->setDeclarationARediger(true);
        $this->assertEquals(true, $obj->getDeclarationARediger());
    }

    /**
     * Tests the setFrequence() method.
     *
     * @return void
     */
    public function testSetFrequence(): void {

        $obj = new TravauxMissions();

        $obj->setFrequence("frequence");
        $this->assertEquals("frequence", $obj->getFrequence());
    }

    /**
     * Tests the setJour() method.
     *
     * @return void
     */
    public function testSetJour(): void {

        $obj = new TravauxMissions();

        $obj->setJour(10);
        $this->assertEquals(10, $obj->getJour());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new TravauxMissions();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setMissions() method.
     *
     * @return void
     */
    public function testSetMissions(): void {

        $obj = new TravauxMissions();

        $obj->setMissions("missions");
        $this->assertEquals("missions", $obj->getMissions());
    }

    /**
     * Tests the setNbUo() method.
     *
     * @return void
     */
    public function testSetNbUo(): void {

        $obj = new TravauxMissions();

        $obj->setNbUo(10.092018);
        $this->assertEquals(10.092018, $obj->getNbUo());
    }

    /**
     * Tests the setNePasEditer() method.
     *
     * @return void
     */
    public function testSetNePasEditer(): void {

        $obj = new TravauxMissions();

        $obj->setNePasEditer(true);
        $this->assertEquals(true, $obj->getNePasEditer());
    }

    /**
     * Tests the setNiveau() method.
     *
     * @return void
     */
    public function testSetNiveau(): void {

        $obj = new TravauxMissions();

        $obj->setNiveau(10);
        $this->assertEquals(10, $obj->getNiveau());
    }

    /**
     * Tests the setRealisePar() method.
     *
     * @return void
     */
    public function testSetRealisePar(): void {

        $obj = new TravauxMissions();

        $obj->setRealisePar("realisePar");
        $this->assertEquals("realisePar", $obj->getRealisePar());
    }

    /**
     * Tests the setTypeAffectation() method.
     *
     * @return void
     */
    public function testSetTypeAffectation(): void {

        $obj = new TravauxMissions();

        $obj->setTypeAffectation("typeAffectation");
        $this->assertEquals("typeAffectation", $obj->getTypeAffectation());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TravauxMissions();

        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getCodeTravail());
        $this->assertNull($obj->getDeclarationARediger());
        $this->assertNull($obj->getFrequence());
        $this->assertNull($obj->getJour());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMissions());
        $this->assertNull($obj->getNbUo());
        $this->assertNull($obj->getNePasEditer());
        $this->assertNull($obj->getNiveau());
        $this->assertNull($obj->getRealisePar());
        $this->assertNull($obj->getTypeAffectation());
    }
}
