<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use WBW\Library\Quadratus\Model\Proprete\ChantiersFrequencesControlesQualite;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Chantiers frequences controles qualite test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class ChantiersFrequencesControlesQualiteTest extends AbstractTestCase {

    /**
     * Test setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new ChantiersFrequencesControlesQualite();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Test setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new ChantiersFrequencesControlesQualite();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new ChantiersFrequencesControlesQualite();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setJour()
     *
     * @return void
     */
    public function testSetJour(): void {

        $obj = new ChantiersFrequencesControlesQualite();

        $obj->setJour("jour");
        $this->assertEquals("jour", $obj->getJour());
    }

    /**
     * Test setMois()
     *
     * @return void
     */
    public function testSetMois(): void {

        $obj = new ChantiersFrequencesControlesQualite();

        $obj->setMois("mois");
        $this->assertEquals("mois", $obj->getMois());
    }

    /**
     * Test setNumeroFreq()
     *
     * @return void
     */
    public function testSetNumeroFreq(): void {

        $obj = new ChantiersFrequencesControlesQualite();

        $obj->setNumeroFreq(10);
        $this->assertEquals(10, $obj->getNumeroFreq());
    }

    /**
     * Test setQuePremiereAnnee()
     *
     * @return void
     */
    public function testSetQuePremiereAnnee(): void {

        $obj = new ChantiersFrequencesControlesQualite();

        $obj->setQuePremiereAnnee(true);
        $this->assertTrue($obj->getQuePremiereAnnee());
    }

    /**
     * Test setTypeControle()
     *
     * @return void
     */
    public function testSetTypeControle(): void {

        $obj = new ChantiersFrequencesControlesQualite();

        $obj->setTypeControle("typeControle");
        $this->assertEquals("typeControle", $obj->getTypeControle());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ChantiersFrequencesControlesQualite();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getJour());
        $this->assertNull($obj->getMois());
        $this->assertNull($obj->getNumeroFreq());
        $this->assertNull($obj->getQuePremiereAnnee());
        $this->assertNull($obj->getTypeControle());
    }
}
