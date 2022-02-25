<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use WBW\Library\Quadratus\Model\Proprete\AttestationFiscale;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Attestation fiscale test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class AttestationFiscaleTest extends AbstractTestCase {

    /**
     * Tests setAnnee()
     *
     * @return void
     */
    public function testSetAnnee(): void {

        $obj = new AttestationFiscale();

        $obj->setAnnee(10);
        $this->assertEquals(10, $obj->getAnnee());
    }

    /**
     * Tests setCodeArticle1()
     *
     * @return void
     */
    public function testSetCodeArticle1(): void {

        $obj = new AttestationFiscale();

        $obj->setCodeArticle1("codeArticle1");
        $this->assertEquals("codeArticle1", $obj->getCodeArticle1());
    }

    /**
     * Tests setCodeArticle10()
     *
     * @return void
     */
    public function testSetCodeArticle10(): void {

        $obj = new AttestationFiscale();

        $obj->setCodeArticle10("codeArticle10");
        $this->assertEquals("codeArticle10", $obj->getCodeArticle10());
    }

    /**
     * Tests setCodeArticle2()
     *
     * @return void
     */
    public function testSetCodeArticle2(): void {

        $obj = new AttestationFiscale();

        $obj->setCodeArticle2("codeArticle2");
        $this->assertEquals("codeArticle2", $obj->getCodeArticle2());
    }

    /**
     * Tests setCodeArticle3()
     *
     * @return void
     */
    public function testSetCodeArticle3(): void {

        $obj = new AttestationFiscale();

        $obj->setCodeArticle3("codeArticle3");
        $this->assertEquals("codeArticle3", $obj->getCodeArticle3());
    }

    /**
     * Tests setCodeArticle4()
     *
     * @return void
     */
    public function testSetCodeArticle4(): void {

        $obj = new AttestationFiscale();

        $obj->setCodeArticle4("codeArticle4");
        $this->assertEquals("codeArticle4", $obj->getCodeArticle4());
    }

    /**
     * Tests setCodeArticle5()
     *
     * @return void
     */
    public function testSetCodeArticle5(): void {

        $obj = new AttestationFiscale();

        $obj->setCodeArticle5("codeArticle5");
        $this->assertEquals("codeArticle5", $obj->getCodeArticle5());
    }

    /**
     * Tests setCodeArticle6()
     *
     * @return void
     */
    public function testSetCodeArticle6(): void {

        $obj = new AttestationFiscale();

        $obj->setCodeArticle6("codeArticle6");
        $this->assertEquals("codeArticle6", $obj->getCodeArticle6());
    }

    /**
     * Tests setCodeArticle7()
     *
     * @return void
     */
    public function testSetCodeArticle7(): void {

        $obj = new AttestationFiscale();

        $obj->setCodeArticle7("codeArticle7");
        $this->assertEquals("codeArticle7", $obj->getCodeArticle7());
    }

    /**
     * Tests setCodeArticle8()
     *
     * @return void
     */
    public function testSetCodeArticle8(): void {

        $obj = new AttestationFiscale();

        $obj->setCodeArticle8("codeArticle8");
        $this->assertEquals("codeArticle8", $obj->getCodeArticle8());
    }

    /**
     * Tests setCodeArticle9()
     *
     * @return void
     */
    public function testSetCodeArticle9(): void {

        $obj = new AttestationFiscale();

        $obj->setCodeArticle9("codeArticle9");
        $this->assertEquals("codeArticle9", $obj->getCodeArticle9());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new AttestationFiscale();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setDureeAnnuelle()
     *
     * @return void
     */
    public function testSetDureeAnnuelle(): void {

        $obj = new AttestationFiscale();

        $obj->setDureeAnnuelle(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeAnnuelle());
    }

    /**
     * Tests setEtat()
     *
     * @return void
     */
    public function testSetEtat(): void {

        $obj = new AttestationFiscale();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests setFamille1()
     *
     * @return void
     */
    public function testSetFamille1(): void {

        $obj = new AttestationFiscale();

        $obj->setFamille1("famille1");
        $this->assertEquals("famille1", $obj->getFamille1());
    }

    /**
     * Tests setFamille10()
     *
     * @return void
     */
    public function testSetFamille10(): void {

        $obj = new AttestationFiscale();

        $obj->setFamille10("famille10");
        $this->assertEquals("famille10", $obj->getFamille10());
    }

    /**
     * Tests setFamille2()
     *
     * @return void
     */
    public function testSetFamille2(): void {

        $obj = new AttestationFiscale();

        $obj->setFamille2("famille2");
        $this->assertEquals("famille2", $obj->getFamille2());
    }

    /**
     * Tests setFamille3()
     *
     * @return void
     */
    public function testSetFamille3(): void {

        $obj = new AttestationFiscale();

        $obj->setFamille3("famille3");
        $this->assertEquals("famille3", $obj->getFamille3());
    }

    /**
     * Tests setFamille4()
     *
     * @return void
     */
    public function testSetFamille4(): void {

        $obj = new AttestationFiscale();

        $obj->setFamille4("famille4");
        $this->assertEquals("famille4", $obj->getFamille4());
    }

    /**
     * Tests setFamille5()
     *
     * @return void
     */
    public function testSetFamille5(): void {

        $obj = new AttestationFiscale();

        $obj->setFamille5("famille5");
        $this->assertEquals("famille5", $obj->getFamille5());
    }

    /**
     * Tests setFamille6()
     *
     * @return void
     */
    public function testSetFamille6(): void {

        $obj = new AttestationFiscale();

        $obj->setFamille6("famille6");
        $this->assertEquals("famille6", $obj->getFamille6());
    }

    /**
     * Tests setFamille7()
     *
     * @return void
     */
    public function testSetFamille7(): void {

        $obj = new AttestationFiscale();

        $obj->setFamille7("famille7");
        $this->assertEquals("famille7", $obj->getFamille7());
    }

    /**
     * Tests setFamille8()
     *
     * @return void
     */
    public function testSetFamille8(): void {

        $obj = new AttestationFiscale();

        $obj->setFamille8("famille8");
        $this->assertEquals("famille8", $obj->getFamille8());
    }

    /**
     * Tests setFamille9()
     *
     * @return void
     */
    public function testSetFamille9(): void {

        $obj = new AttestationFiscale();

        $obj->setFamille9("famille9");
        $this->assertEquals("famille9", $obj->getFamille9());
    }

    /**
     * Tests setLienDocument()
     *
     * @return void
     */
    public function testSetLienDocument(): void {

        $obj = new AttestationFiscale();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests setModeReglement()
     *
     * @return void
     */
    public function testSetModeReglement(): void {

        $obj = new AttestationFiscale();

        $obj->setModeReglement("modeReglement");
        $this->assertEquals("modeReglement", $obj->getModeReglement());
    }

    /**
     * Tests setMontantTes()
     *
     * @return void
     */
    public function testSetMontantTes(): void {

        $obj = new AttestationFiscale();

        $obj->setMontantTes(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTes());
    }

    /**
     * Tests setMontantTtc()
     *
     * @return void
     */
    public function testSetMontantTtc(): void {

        $obj = new AttestationFiscale();

        $obj->setMontantTtc(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTtc());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AttestationFiscale();

        $this->assertNull($obj->getAnnee());
        $this->assertNull($obj->getCodeArticle1());
        $this->assertNull($obj->getCodeArticle10());
        $this->assertNull($obj->getCodeArticle2());
        $this->assertNull($obj->getCodeArticle3());
        $this->assertNull($obj->getCodeArticle4());
        $this->assertNull($obj->getCodeArticle5());
        $this->assertNull($obj->getCodeArticle6());
        $this->assertNull($obj->getCodeArticle7());
        $this->assertNull($obj->getCodeArticle8());
        $this->assertNull($obj->getCodeArticle9());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getDureeAnnuelle());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getFamille1());
        $this->assertNull($obj->getFamille10());
        $this->assertNull($obj->getFamille2());
        $this->assertNull($obj->getFamille3());
        $this->assertNull($obj->getFamille4());
        $this->assertNull($obj->getFamille5());
        $this->assertNull($obj->getFamille6());
        $this->assertNull($obj->getFamille7());
        $this->assertNull($obj->getFamille8());
        $this->assertNull($obj->getFamille9());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getModeReglement());
        $this->assertNull($obj->getMontantTes());
        $this->assertNull($obj->getMontantTtc());
    }
}
