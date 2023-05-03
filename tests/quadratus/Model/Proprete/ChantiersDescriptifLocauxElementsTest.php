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

use WBW\Library\Quadratus\Model\Proprete\ChantiersDescriptifLocauxElements;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Chantiers descriptif locaux elements test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class ChantiersDescriptifLocauxElementsTest extends AbstractTestCase {

    /**
     * Test setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new ChantiersDescriptifLocauxElements();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Test setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new ChantiersDescriptifLocauxElements();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new ChantiersDescriptifLocauxElements();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeElement()
     *
     * @return void
     */
    public function testSetCodeElement(): void {

        $obj = new ChantiersDescriptifLocauxElements();

        $obj->setCodeElement("codeElement");
        $this->assertEquals("codeElement", $obj->getCodeElement());
    }

    /**
     * Test setCoefficient()
     *
     * @return void
     */
    public function testSetCoefficient(): void {

        $obj = new ChantiersDescriptifLocauxElements();

        $obj->setCoefficient(10.092018);
        $this->assertEquals(10.092018, $obj->getCoefficient());
    }

    /**
     * Test setNiveauNoeud()
     *
     * @return void
     */
    public function testSetNiveauNoeud(): void {

        $obj = new ChantiersDescriptifLocauxElements();

        $obj->setNiveauNoeud(10);
        $this->assertEquals(10, $obj->getNiveauNoeud());
    }

    /**
     * Test setNumeroNoeud()
     *
     * @return void
     */
    public function testSetNumeroNoeud(): void {

        $obj = new ChantiersDescriptifLocauxElements();

        $obj->setNumeroNoeud(10);
        $this->assertEquals(10, $obj->getNumeroNoeud());
    }

    /**
     * Test setTypeElement()
     *
     * @return void
     */
    public function testSetTypeElement(): void {

        $obj = new ChantiersDescriptifLocauxElements();

        $obj->setTypeElement("typeElement");
        $this->assertEquals("typeElement", $obj->getTypeElement());
    }

    /**
     * Test setUniqIdLocal()
     *
     * @return void
     */
    public function testSetUniqIdLocal(): void {

        $obj = new ChantiersDescriptifLocauxElements();

        $obj->setUniqIdLocal("uniqIdLocal");
        $this->assertEquals("uniqIdLocal", $obj->getUniqIdLocal());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ChantiersDescriptifLocauxElements();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeElement());
        $this->assertNull($obj->getCoefficient());
        $this->assertNull($obj->getNiveauNoeud());
        $this->assertNull($obj->getNumeroNoeud());
        $this->assertNull($obj->getTypeElement());
        $this->assertNull($obj->getUniqIdLocal());
    }
}
