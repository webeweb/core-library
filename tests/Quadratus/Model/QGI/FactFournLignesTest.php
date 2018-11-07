<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QGI;

use WBW\Library\Core\Quadratus\Model\QGI\FactFournLignes;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Fact fourn lignes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class FactFournLignesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new FactFournLignes();

        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeMission());
        $this->assertNull($obj->getCollaborateur());
        $this->assertNull($obj->getCompte());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMontantCredit());
        $this->assertNull($obj->getMontantDebit());
        $this->assertNull($obj->getNumEntete());
        $this->assertNull($obj->getNumLigne());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new FactFournLignes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeMission() method.
     *
     * @return void
     */
    public function testSetCodeMission() {

        $obj = new FactFournLignes();

        $obj->setCodeMission("codeMission");
        $this->assertEquals("codeMission", $obj->getCodeMission());
    }

    /**
     * Tests the setCollaborateur() method.
     *
     * @return void
     */
    public function testSetCollaborateur() {

        $obj = new FactFournLignes();

        $obj->setCollaborateur("collaborateur");
        $this->assertEquals("collaborateur", $obj->getCollaborateur());
    }

    /**
     * Tests the setCompte() method.
     *
     * @return void
     */
    public function testSetCompte() {

        $obj = new FactFournLignes();

        $obj->setCompte("compte");
        $this->assertEquals("compte", $obj->getCompte());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new FactFournLignes();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setMontantCredit() method.
     *
     * @return void
     */
    public function testSetMontantCredit() {

        $obj = new FactFournLignes();

        $obj->setMontantCredit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantCredit());
    }

    /**
     * Tests the setMontantDebit() method.
     *
     * @return void
     */
    public function testSetMontantDebit() {

        $obj = new FactFournLignes();

        $obj->setMontantDebit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantDebit());
    }

    /**
     * Tests the setNumEntete() method.
     *
     * @return void
     */
    public function testSetNumEntete() {

        $obj = new FactFournLignes();

        $obj->setNumEntete("numEntete");
        $this->assertEquals("numEntete", $obj->getNumEntete());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne() {

        $obj = new FactFournLignes();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

}
