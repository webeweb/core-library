<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\VMP;

/**
 * V m p model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class VMPTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new VMP();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeJournal());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getCompteComm());
        $this->assertNull($obj->getCompteCoupons());
        $this->assertNull($obj->getCompteFrais());
        $this->assertNull($obj->getIdentifiant());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNbLignesMvt());
        $this->assertNull($obj->getNumCompte());
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode() {

        $obj = new VMP();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setCodeJournal() method.
     *
     * @return void
     */
    public function testSetCodeJournal() {

        $obj = new VMP();

        $obj->setCodeJournal("codeJournal");
        $this->assertEquals("codeJournal", $obj->getCodeJournal());
    }

    /**
     * Tests the setCommentaire() method.
     *
     * @return void
     */
    public function testSetCommentaire() {

        $obj = new VMP();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Tests the setCompteComm() method.
     *
     * @return void
     */
    public function testSetCompteComm() {

        $obj = new VMP();

        $obj->setCompteComm("compteComm");
        $this->assertEquals("compteComm", $obj->getCompteComm());
    }

    /**
     * Tests the setCompteCoupons() method.
     *
     * @return void
     */
    public function testSetCompteCoupons() {

        $obj = new VMP();

        $obj->setCompteCoupons("compteCoupons");
        $this->assertEquals("compteCoupons", $obj->getCompteCoupons());
    }

    /**
     * Tests the setCompteFrais() method.
     *
     * @return void
     */
    public function testSetCompteFrais() {

        $obj = new VMP();

        $obj->setCompteFrais("compteFrais");
        $this->assertEquals("compteFrais", $obj->getCompteFrais());
    }

    /**
     * Tests the setIdentifiant() method.
     *
     * @return void
     */
    public function testSetIdentifiant() {

        $obj = new VMP();

        $obj->setIdentifiant("identifiant");
        $this->assertEquals("identifiant", $obj->getIdentifiant());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new VMP();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setNbLignesMvt() method.
     *
     * @return void
     */
    public function testSetNbLignesMvt() {

        $obj = new VMP();

        $obj->setNbLignesMvt(10);
        $this->assertEquals(10, $obj->getNbLignesMvt());
    }

    /**
     * Tests the setNumCompte() method.
     *
     * @return void
     */
    public function testSetNumCompte() {

        $obj = new VMP();

        $obj->setNumCompte("numCompte");
        $this->assertEquals("numCompte", $obj->getNumCompte());
    }
}
