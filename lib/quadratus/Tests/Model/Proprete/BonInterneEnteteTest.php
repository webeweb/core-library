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
use WBW\Library\Quadratus\Model\Proprete\BonInterneEntete;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Bon interne entete test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class BonInterneEnteteTest extends AbstractTestCase {

    /**
     * Test setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new BonInterneEntete();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Test setCodeLivreur()
     *
     * @return void
     */
    public function testSetCodeLivreur(): void {

        $obj = new BonInterneEntete();

        $obj->setCodeLivreur("codeLivreur");
        $this->assertEquals("codeLivreur", $obj->getCodeLivreur());
    }

    /**
     * Test setDateLivraison()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateLivraison(): void {

        // Set a Date/time mock.
        $dateLivraison = new DateTime("2018-09-10");

        $obj = new BonInterneEntete();

        $obj->setDateLivraison($dateLivraison);
        $this->assertSame($dateLivraison, $obj->getDateLivraison());
    }

    /**
     * Test setLienDocument()
     *
     * @return void
     */
    public function testSetLienDocument(): void {

        $obj = new BonInterneEntete();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Test setNoBonInt()
     *
     * @return void
     */
    public function testSetNoBonInt(): void {

        $obj = new BonInterneEntete();

        $obj->setNoBonInt("noBonInt");
        $this->assertEquals("noBonInt", $obj->getNoBonInt());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new BonInterneEntete();

        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeLivreur());
        $this->assertNull($obj->getDateLivraison());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getNoBonInt());
    }
}
