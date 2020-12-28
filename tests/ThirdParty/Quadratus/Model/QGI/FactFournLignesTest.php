<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\FactFournLignes;

/**
 * Fact fourn lignes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class FactFournLignesTest extends AbstractTestCase {

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new FactFournLignes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeMission() method.
     *
     * @return void
     */
    public function testSetCodeMission(): void {

        $obj = new FactFournLignes();

        $obj->setCodeMission("codeMission");
        $this->assertEquals("codeMission", $obj->getCodeMission());
    }

    /**
     * Tests the setCollaborateur() method.
     *
     * @return void
     */
    public function testSetCollaborateur(): void {

        $obj = new FactFournLignes();

        $obj->setCollaborateur("collaborateur");
        $this->assertEquals("collaborateur", $obj->getCollaborateur());
    }

    /**
     * Tests the setCompte() method.
     *
     * @return void
     */
    public function testSetCompte(): void {

        $obj = new FactFournLignes();

        $obj->setCompte("compte");
        $this->assertEquals("compte", $obj->getCompte());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new FactFournLignes();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setMontantCredit() method.
     *
     * @return void
     */
    public function testSetMontantCredit(): void {

        $obj = new FactFournLignes();

        $obj->setMontantCredit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantCredit());
    }

    /**
     * Tests the setMontantDebit() method.
     *
     * @return void
     */
    public function testSetMontantDebit(): void {

        $obj = new FactFournLignes();

        $obj->setMontantDebit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantDebit());
    }

    /**
     * Tests the setNumEntete() method.
     *
     * @return void
     */
    public function testSetNumEntete(): void {

        $obj = new FactFournLignes();

        $obj->setNumEntete("numEntete");
        $this->assertEquals("numEntete", $obj->getNumEntete());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new FactFournLignes();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

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
}
