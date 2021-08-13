<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use WBW\Library\Quadratus\Model\QGI\LiaisonsDestinataires;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Liaisons destinataires test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class LiaisonsDestinatairesTest extends AbstractTestCase {

    /**
     * Tests the setAgence() method.
     *
     * @return void
     */
    public function testSetAgence(): void {

        $obj = new LiaisonsDestinataires();

        $obj->setAgence(true);
        $this->assertEquals(true, $obj->getAgence());
    }

    /**
     * Tests the setChemin() method.
     *
     * @return void
     */
    public function testSetChemin(): void {

        $obj = new LiaisonsDestinataires();

        $obj->setChemin("chemin");
        $this->assertEquals("chemin", $obj->getChemin());
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new LiaisonsDestinataires();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setEmail() method.
     *
     * @return void
     */
    public function testSetEmail(): void {

        $obj = new LiaisonsDestinataires();

        $obj->setEmail("email");
        $this->assertEquals("email", $obj->getEmail());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new LiaisonsDestinataires();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setMachine() method.
     *
     * @return void
     */
    public function testSetMachine(): void {

        $obj = new LiaisonsDestinataires();

        $obj->setMachine("machine");
        $this->assertEquals("machine", $obj->getMachine());
    }

    /**
     * Tests the setMotDePasse() method.
     *
     * @return void
     */
    public function testSetMotDePasse(): void {

        $obj = new LiaisonsDestinataires();

        $obj->setMotDePasse("motDePasse");
        $this->assertEquals("motDePasse", $obj->getMotDePasse());
    }

    /**
     * Tests the setPartage() method.
     *
     * @return void
     */
    public function testSetPartage(): void {

        $obj = new LiaisonsDestinataires();

        $obj->setPartage("partage");
        $this->assertEquals("partage", $obj->getPartage());
    }

    /**
     * Tests the setSelectionArticle() method.
     *
     * @return void
     */
    public function testSetSelectionArticle(): void {

        $obj = new LiaisonsDestinataires();

        $obj->setSelectionArticle("selectionArticle");
        $this->assertEquals("selectionArticle", $obj->getSelectionArticle());
    }

    /**
     * Tests the setSelectionClient() method.
     *
     * @return void
     */
    public function testSetSelectionClient(): void {

        $obj = new LiaisonsDestinataires();

        $obj->setSelectionClient("selectionClient");
        $this->assertEquals("selectionClient", $obj->getSelectionClient());
    }

    /**
     * Tests the setSelectionFournisseur() method.
     *
     * @return void
     */
    public function testSetSelectionFournisseur(): void {

        $obj = new LiaisonsDestinataires();

        $obj->setSelectionFournisseur("selectionFournisseur");
        $this->assertEquals("selectionFournisseur", $obj->getSelectionFournisseur());
    }

    /**
     * Tests the setTypeLiaison() method.
     *
     * @return void
     */
    public function testSetTypeLiaison(): void {

        $obj = new LiaisonsDestinataires();

        $obj->setTypeLiaison("typeLiaison");
        $this->assertEquals("typeLiaison", $obj->getTypeLiaison());
    }

    /**
     * Tests the setUtilisateur() method.
     *
     * @return void
     */
    public function testSetUtilisateur(): void {

        $obj = new LiaisonsDestinataires();

        $obj->setUtilisateur("utilisateur");
        $this->assertEquals("utilisateur", $obj->getUtilisateur());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new LiaisonsDestinataires();

        $this->assertNull($obj->getAgence());
        $this->assertNull($obj->getChemin());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getEmail());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getMachine());
        $this->assertNull($obj->getMotDePasse());
        $this->assertNull($obj->getPartage());
        $this->assertNull($obj->getSelectionArticle());
        $this->assertNull($obj->getSelectionClient());
        $this->assertNull($obj->getSelectionFournisseur());
        $this->assertNull($obj->getTypeLiaison());
        $this->assertNull($obj->getUtilisateur());
    }
}
