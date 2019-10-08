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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\AdressesLivraison;

/**
 * Adresses livraison model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class AdressesLivraisonTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AdressesLivraison();

        $this->assertNull($obj->getBTQ());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getCodeLivraison());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getNomSuite());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNumVoie());
    }

    /**
     * Tests the setBTQ() method.
     *
     * @return void
     */
    public function testSetBTQ() {

        $obj = new AdressesLivraison();

        $obj->setBTQ("bTQ");
        $this->assertEquals("bTQ", $obj->getBTQ());
    }

    /**
     * Tests the setBureauDistributeur() method.
     *
     * @return void
     */
    public function testSetBureauDistributeur() {

        $obj = new AdressesLivraison();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
    }

    /**
     * Tests the setCodeLivraison() method.
     *
     * @return void
     */
    public function testSetCodeLivraison() {

        $obj = new AdressesLivraison();

        $obj->setCodeLivraison("codeLivraison");
        $this->assertEquals("codeLivraison", $obj->getCodeLivraison());
    }

    /**
     * Tests the setCodePostal() method.
     *
     * @return void
     */
    public function testSetCodePostal() {

        $obj = new AdressesLivraison();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests the setComplement() method.
     *
     * @return void
     */
    public function testSetComplement() {

        $obj = new AdressesLivraison();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new AdressesLivraison();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setNom() method.
     *
     * @return void
     */
    public function testSetNom() {

        $obj = new AdressesLivraison();

        $obj->setNom("nom");
        $this->assertEquals("nom", $obj->getNom());
    }

    /**
     * Tests the setNomSuite() method.
     *
     * @return void
     */
    public function testSetNomSuite() {

        $obj = new AdressesLivraison();

        $obj->setNomSuite("nomSuite");
        $this->assertEquals("nomSuite", $obj->getNomSuite());
    }

    /**
     * Tests the setNomVoie() method.
     *
     * @return void
     */
    public function testSetNomVoie() {

        $obj = new AdressesLivraison();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Tests the setNumVoie() method.
     *
     * @return void
     */
    public function testSetNumVoie() {

        $obj = new AdressesLivraison();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }
}
