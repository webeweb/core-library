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

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\ChantiersFrequencesControlesQualite;

/**
 * Chantiers frequences controles qualite test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class ChantiersFrequencesControlesQualiteTest extends AbstractTestCase {

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new ChantiersFrequencesControlesQualite();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new ChantiersFrequencesControlesQualite();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new ChantiersFrequencesControlesQualite();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setJour() method.
     *
     * @return void
     */
    public function testSetJour(): void {

        $obj = new ChantiersFrequencesControlesQualite();

        $obj->setJour("jour");
        $this->assertEquals("jour", $obj->getJour());
    }

    /**
     * Tests the setMois() method.
     *
     * @return void
     */
    public function testSetMois(): void {

        $obj = new ChantiersFrequencesControlesQualite();

        $obj->setMois("mois");
        $this->assertEquals("mois", $obj->getMois());
    }

    /**
     * Tests the setNumeroFreq() method.
     *
     * @return void
     */
    public function testSetNumeroFreq(): void {

        $obj = new ChantiersFrequencesControlesQualite();

        $obj->setNumeroFreq(10);
        $this->assertEquals(10, $obj->getNumeroFreq());
    }

    /**
     * Tests the setQuePremiereAnnee() method.
     *
     * @return void
     */
    public function testSetQuePremiereAnnee(): void {

        $obj = new ChantiersFrequencesControlesQualite();

        $obj->setQuePremiereAnnee(true);
        $this->assertEquals(true, $obj->getQuePremiereAnnee());
    }

    /**
     * Tests the setTypeControle() method.
     *
     * @return void
     */
    public function testSetTypeControle(): void {

        $obj = new ChantiersFrequencesControlesQualite();

        $obj->setTypeControle("typeControle");
        $this->assertEquals("typeControle", $obj->getTypeControle());
    }

    /**
     * Tests the __construct() method.
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
