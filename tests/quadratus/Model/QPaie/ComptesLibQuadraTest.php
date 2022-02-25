<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use WBW\Library\Quadratus\Model\QPaie\ComptesLibQuadra;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Comptes lib quadra test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class ComptesLibQuadraTest extends AbstractTestCase {

    /**
     * Tests setCodeDucs()
     *
     * @return void
     */
    public function testSetCodeDucs(): void {

        $obj = new ComptesLibQuadra();

        $obj->setCodeDucs("codeDucs");
        $this->assertEquals("codeDucs", $obj->getCodeDucs());
    }

    /**
     * Tests setCodeEditionHisto()
     *
     * @return void
     */
    public function testSetCodeEditionHisto(): void {

        $obj = new ComptesLibQuadra();

        $obj->setCodeEditionHisto("codeEditionHisto");
        $this->assertEquals("codeEditionHisto", $obj->getCodeEditionHisto());
    }

    /**
     * Tests setCodeLibelle()
     *
     * @return void
     */
    public function testSetCodeLibelle(): void {

        $obj = new ComptesLibQuadra();

        $obj->setCodeLibelle("codeLibelle");
        $this->assertEquals("codeLibelle", $obj->getCodeLibelle());
    }

    /**
     * Tests setCodeOrganisme()
     *
     * @return void
     */
    public function testSetCodeOrganisme(): void {

        $obj = new ComptesLibQuadra();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Tests setCodeTypeBSpecPrev()
     *
     * @return void
     */
    public function testSetCodeTypeBSpecPrev(): void {

        $obj = new ComptesLibQuadra();

        $obj->setCodeTypeBSpecPrev("codeTypeBSpecPrev");
        $this->assertEquals("codeTypeBSpecPrev", $obj->getCodeTypeBSpecPrev());
    }

    /**
     * Tests setCompteCharge()
     *
     * @return void
     */
    public function testSetCompteCharge(): void {

        $obj = new ComptesLibQuadra();

        $obj->setCompteCharge("compteCharge");
        $this->assertEquals("compteCharge", $obj->getCompteCharge());
    }

    /**
     * Tests setConditionSpec()
     *
     * @return void
     */
    public function testSetConditionSpec(): void {

        $obj = new ComptesLibQuadra();

        $obj->setConditionSpec("conditionSpec");
        $this->assertEquals("conditionSpec", $obj->getConditionSpec());
    }

    /**
     * Tests setEditionForceeDs()
     *
     * @return void
     */
    public function testSetEditionForceeDs(): void {

        $obj = new ComptesLibQuadra();

        $obj->setEditionForceeDs("editionForceeDs");
        $this->assertEquals("editionForceeDs", $obj->getEditionForceeDs());
    }

    /**
     * Tests setExclureLoiTepa()
     *
     * @return void
     */
    public function testSetExclureLoiTepa(): void {

        $obj = new ComptesLibQuadra();

        $obj->setExclureLoiTepa("exclureLoiTepa");
        $this->assertEquals("exclureLoiTepa", $obj->getExclureLoiTepa());
    }

    /**
     * Tests setFraisSante()
     *
     * @return void
     */
    public function testSetFraisSante(): void {

        $obj = new ComptesLibQuadra();

        $obj->setFraisSante("fraisSante");
        $this->assertEquals("fraisSante", $obj->getFraisSante());
    }

    /**
     * Tests setPrevoyanceComp()
     *
     * @return void
     */
    public function testSetPrevoyanceComp(): void {

        $obj = new ComptesLibQuadra();

        $obj->setPrevoyanceComp("prevoyanceComp");
        $this->assertEquals("prevoyanceComp", $obj->getPrevoyanceComp());
    }

    /**
     * Tests setQualifiantCotis()
     *
     * @return void
     */
    public function testSetQualifiantCotis(): void {

        $obj = new ComptesLibQuadra();

        $obj->setQualifiantCotis("qualifiantCotis");
        $this->assertEquals("qualifiantCotis", $obj->getQualifiantCotis());
    }

    /**
     * Tests setRetraiteObligatoire()
     *
     * @return void
     */
    public function testSetRetraiteObligatoire(): void {

        $obj = new ComptesLibQuadra();

        $obj->setRetraiteObligatoire("retraiteObligatoire");
        $this->assertEquals("retraiteObligatoire", $obj->getRetraiteObligatoire());
    }

    /**
     * Tests setRetraiteSupp()
     *
     * @return void
     */
    public function testSetRetraiteSupp(): void {

        $obj = new ComptesLibQuadra();

        $obj->setRetraiteSupp("retraiteSupp");
        $this->assertEquals("retraiteSupp", $obj->getRetraiteSupp());
    }

    /**
     * Tests setSansReintegrationSociale()
     *
     * @return void
     */
    public function testSetSansReintegrationSociale(): void {

        $obj = new ComptesLibQuadra();

        $obj->setSansReintegrationSociale("sansReintegrationSociale");
        $this->assertEquals("sansReintegrationSociale", $obj->getSansReintegrationSociale());
    }

    /**
     * Tests setSoumisCrds100()
     *
     * @return void
     */
    public function testSetSoumisCrds100(): void {

        $obj = new ComptesLibQuadra();

        $obj->setSoumisCrds100("soumisCrds100");
        $this->assertEquals("soumisCrds100", $obj->getSoumisCrds100());
    }

    /**
     * Tests setSoumisCsg100()
     *
     * @return void
     */
    public function testSetSoumisCsg100(): void {

        $obj = new ComptesLibQuadra();

        $obj->setSoumisCsg100("soumisCsg100");
        $this->assertEquals("soumisCsg100", $obj->getSoumisCsg100());
    }

    /**
     * Tests setTauxForfaitSocial20()
     *
     * @return void
     */
    public function testSetTauxForfaitSocial20(): void {

        $obj = new ComptesLibQuadra();

        $obj->setTauxForfaitSocial20("tauxForfaitSocial20");
        $this->assertEquals("tauxForfaitSocial20", $obj->getTauxForfaitSocial20());
    }

    /**
     * Tests setTauxForfaitSocial8()
     *
     * @return void
     */
    public function testSetTauxForfaitSocial8(): void {

        $obj = new ComptesLibQuadra();

        $obj->setTauxForfaitSocial8("tauxForfaitSocial8");
        $this->assertEquals("tauxForfaitSocial8", $obj->getTauxForfaitSocial8());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ComptesLibQuadra();

        $this->assertNull($obj->getCodeDucs());
        $this->assertNull($obj->getCodeEditionHisto());
        $this->assertNull($obj->getCodeLibelle());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getCodeTypeBSpecPrev());
        $this->assertNull($obj->getCompteCharge());
        $this->assertNull($obj->getConditionSpec());
        $this->assertNull($obj->getEditionForceeDs());
        $this->assertNull($obj->getExclureLoiTepa());
        $this->assertNull($obj->getFraisSante());
        $this->assertNull($obj->getPrevoyanceComp());
        $this->assertNull($obj->getQualifiantCotis());
        $this->assertNull($obj->getRetraiteObligatoire());
        $this->assertNull($obj->getRetraiteSupp());
        $this->assertNull($obj->getSansReintegrationSociale());
        $this->assertNull($obj->getSoumisCrds100());
        $this->assertNull($obj->getSoumisCsg100());
        $this->assertNull($obj->getTauxForfaitSocial20());
        $this->assertNull($obj->getTauxForfaitSocial8());
    }
}
