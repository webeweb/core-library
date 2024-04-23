<?php

declare(strict_types = 1);

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
use WBW\Library\Quadratus\Model\Proprete\ChantiersHistoRev;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Chantiers histo rev test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class ChantiersHistoRevTest extends AbstractTestCase {

    /**
     * Test setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new ChantiersHistoRev();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Test setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new ChantiersHistoRev();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new ChantiersHistoRev();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeFormule()
     *
     * @return void
     */
    public function testSetCodeFormule(): void {

        $obj = new ChantiersHistoRev();

        $obj->setCodeFormule("codeFormule");
        $this->assertEquals("codeFormule", $obj->getCodeFormule());
    }

    /**
     * Test setCodeRegroupement()
     *
     * @return void
     */
    public function testSetCodeRegroupement(): void {

        $obj = new ChantiersHistoRev();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Test setCommentaire()
     *
     * @return void
     */
    public function testSetCommentaire(): void {

        $obj = new ChantiersHistoRev();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Test setDateRevision()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateRevision(): void {

        // Set a Date/time mock.
        $dateRevision = new DateTime("2018-09-10");

        $obj = new ChantiersHistoRev();

        $obj->setDateRevision($dateRevision);
        $this->assertSame($dateRevision, $obj->getDateRevision());
    }

    /**
     * Test setFormule()
     *
     * @return void
     */
    public function testSetFormule(): void {

        $obj = new ChantiersHistoRev();

        $obj->setFormule("formule");
        $this->assertEquals("formule", $obj->getFormule());
    }

    /**
     * Test setLienDocument()
     *
     * @return void
     */
    public function testSetLienDocument(): void {

        $obj = new ChantiersHistoRev();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Test setNumBt()
     *
     * @return void
     */
    public function testSetNumBt(): void {

        $obj = new ChantiersHistoRev();

        $obj->setNumBt(10);
        $this->assertEquals(10, $obj->getNumBt());
    }

    /**
     * Test setNumLigneRev()
     *
     * @return void
     */
    public function testSetNumLigneRev(): void {

        $obj = new ChantiersHistoRev();

        $obj->setNumLigneRev(10);
        $this->assertEquals(10, $obj->getNumLigneRev());
    }

    /**
     * Test setPeriodeRevisee()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeRevisee(): void {

        // Set a Date/time mock.
        $periodeRevisee = new DateTime("2018-09-10");

        $obj = new ChantiersHistoRev();

        $obj->setPeriodeRevisee($periodeRevisee);
        $this->assertSame($periodeRevisee, $obj->getPeriodeRevisee());
    }

    /**
     * Test setPourcentage()
     *
     * @return void
     */
    public function testSetPourcentage(): void {

        $obj = new ChantiersHistoRev();

        $obj->setPourcentage(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentage());
    }

    /**
     * Test setRefusClient()
     *
     * @return void
     */
    public function testSetRefusClient(): void {

        $obj = new ChantiersHistoRev();

        $obj->setRefusClient(true);
        $this->assertTrue($obj->getRefusClient());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ChantiersHistoRev();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeFormule());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getDateRevision());
        $this->assertNull($obj->getFormule());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getNumBt());
        $this->assertNull($obj->getNumLigneRev());
        $this->assertNull($obj->getPeriodeRevisee());
        $this->assertNull($obj->getPourcentage());
        $this->assertNull($obj->getRefusClient());
    }
}
