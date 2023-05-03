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

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\Proprete\ChantiersDescriptifLocaux;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Chantiers descriptif locaux test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class ChantiersDescriptifLocauxTest extends AbstractTestCase {

    /**
     * Test setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new ChantiersDescriptifLocaux();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Test setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new ChantiersDescriptifLocaux();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new ChantiersDescriptifLocaux();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new ChantiersDescriptifLocaux();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Test setCodeCritere1()
     *
     * @return void
     */
    public function testSetCodeCritere1(): void {

        $obj = new ChantiersDescriptifLocaux();

        $obj->setCodeCritere1("codeCritere1");
        $this->assertEquals("codeCritere1", $obj->getCodeCritere1());
    }

    /**
     * Test setCoefficient()
     *
     * @return void
     */
    public function testSetCoefficient(): void {

        $obj = new ChantiersDescriptifLocaux();

        $obj->setCoefficient(10.092018);
        $this->assertEquals(10.092018, $obj->getCoefficient());
    }

    /**
     * Test setDateTransfert()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateTransfert(): void {

        // Set a Date/time mock.
        $dateTransfert = new DateTime("2018-09-10");

        $obj = new ChantiersDescriptifLocaux();

        $obj->setDateTransfert($dateTransfert);
        $this->assertSame($dateTransfert, $obj->getDateTransfert());
    }

    /**
     * Test setFamilleElements()
     *
     * @return void
     */
    public function testSetFamilleElements(): void {

        $obj = new ChantiersDescriptifLocaux();

        $obj->setFamilleElements("familleElements");
        $this->assertEquals("familleElements", $obj->getFamilleElements());
    }

    /**
     * Test setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new ChantiersDescriptifLocaux();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Test setLibelleCritere1()
     *
     * @return void
     */
    public function testSetLibelleCritere1(): void {

        $obj = new ChantiersDescriptifLocaux();

        $obj->setLibelleCritere1("libelleCritere1");
        $this->assertEquals("libelleCritere1", $obj->getLibelleCritere1());
    }

    /**
     * Test setNiveauNoeud()
     *
     * @return void
     */
    public function testSetNiveauNoeud(): void {

        $obj = new ChantiersDescriptifLocaux();

        $obj->setNiveauNoeud(10);
        $this->assertEquals(10, $obj->getNiveauNoeud());
    }

    /**
     * Test setNoeudLocal()
     *
     * @return void
     */
    public function testSetNoeudLocal(): void {

        $obj = new ChantiersDescriptifLocaux();

        $obj->setNoeudLocal(true);
        $this->assertTrue($obj->getNoeudLocal());
    }

    /**
     * Test setNoteObjectif()
     *
     * @return void
     */
    public function testSetNoteObjectif(): void {

        $obj = new ChantiersDescriptifLocaux();

        $obj->setNoteObjectif(10.092018);
        $this->assertEquals(10.092018, $obj->getNoteObjectif());
    }

    /**
     * Test setNumeroNoeud()
     *
     * @return void
     */
    public function testSetNumeroNoeud(): void {

        $obj = new ChantiersDescriptifLocaux();

        $obj->setNumeroNoeud(10);
        $this->assertEquals(10, $obj->getNumeroNoeud());
    }

    /**
     * Test setPoste()
     *
     * @return void
     */
    public function testSetPoste(): void {

        $obj = new ChantiersDescriptifLocaux();

        $obj->setPoste("poste");
        $this->assertEquals("poste", $obj->getPoste());
    }

    /**
     * Test setUniqIdBlocage()
     *
     * @return void
     */
    public function testSetUniqIdBlocage(): void {

        $obj = new ChantiersDescriptifLocaux();

        $obj->setUniqIdBlocage("uniqIdBlocage");
        $this->assertEquals("uniqIdBlocage", $obj->getUniqIdBlocage());
    }

    /**
     * Test setUniqIdNoeud()
     *
     * @return void
     */
    public function testSetUniqIdNoeud(): void {

        $obj = new ChantiersDescriptifLocaux();

        $obj->setUniqIdNoeud("uniqIdNoeud");
        $this->assertEquals("uniqIdNoeud", $obj->getUniqIdNoeud());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ChantiersDescriptifLocaux();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeCritere1());
        $this->assertNull($obj->getCoefficient());
        $this->assertNull($obj->getDateTransfert());
        $this->assertNull($obj->getFamilleElements());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLibelleCritere1());
        $this->assertNull($obj->getNiveauNoeud());
        $this->assertNull($obj->getNoeudLocal());
        $this->assertNull($obj->getNoteObjectif());
        $this->assertNull($obj->getNumeroNoeud());
        $this->assertNull($obj->getPoste());
        $this->assertNull($obj->getUniqIdBlocage());
        $this->assertNull($obj->getUniqIdNoeud());
    }
}
