<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\Proprete;

use DateTime;
use WBW\Library\Core\Quadratus\Model\Proprete\BonInterneEntete;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Bon interne entete model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class BonInterneEnteteTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new BonInterneEntete();

        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeLivreur());
        $this->assertNull($obj->getDateLivraison());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getNoBonInt());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new BonInterneEntete();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeLivreur() method.
     *
     * @return void
     */
    public function testSetCodeLivreur() {

        $obj = new BonInterneEntete();

        $obj->setCodeLivreur("codeLivreur");
        $this->assertEquals("codeLivreur", $obj->getCodeLivreur());
    }

    /**
     * Tests the setDateLivraison() method.
     *
     * @return void
     */
    public function testSetDateLivraison() {

        $obj = new BonInterneEntete();

        $obj->setDateLivraison(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateLivraison());
    }

    /**
     * Tests the setLienDocument() method.
     *
     * @return void
     */
    public function testSetLienDocument() {

        $obj = new BonInterneEntete();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests the setNoBonInt() method.
     *
     * @return void
     */
    public function testSetNoBonInt() {

        $obj = new BonInterneEntete();

        $obj->setNoBonInt("noBonInt");
        $this->assertEquals("noBonInt", $obj->getNoBonInt());
    }

}
