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

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\RepertoireCol;

/**
 * Repertoire col test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class RepertoireColTest extends AbstractTestCase {

    /**
     * Tests the setAdresse1() method.
     *
     * @return void
     */
    public function testSetAdresse1(): void {

        $obj = new RepertoireCol();

        $obj->setAdresse1("adresse1");
        $this->assertEquals("adresse1", $obj->getAdresse1());
    }

    /**
     * Tests the setAdresse2() method.
     *
     * @return void
     */
    public function testSetAdresse2(): void {

        $obj = new RepertoireCol();

        $obj->setAdresse2("adresse2");
        $this->assertEquals("adresse2", $obj->getAdresse2());
    }

    /**
     * Tests the setAdresse3() method.
     *
     * @return void
     */
    public function testSetAdresse3(): void {

        $obj = new RepertoireCol();

        $obj->setAdresse3("adresse3");
        $this->assertEquals("adresse3", $obj->getAdresse3());
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new RepertoireCol();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new RepertoireCol();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeComp() method.
     *
     * @return void
     */
    public function testSetCodeComp(): void {

        $obj = new RepertoireCol();

        $obj->setCodeComp("codeComp");
        $this->assertEquals("codeComp", $obj->getCodeComp());
    }

    /**
     * Tests the setCollModif() method.
     *
     * @return void
     */
    public function testSetCollModif(): void {

        $obj = new RepertoireCol();

        $obj->setCollModif("collModif");
        $this->assertEquals("collModif", $obj->getCollModif());
    }

    /**
     * Tests the setCommentaire() method.
     *
     * @return void
     */
    public function testSetCommentaire(): void {

        $obj = new RepertoireCol();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Tests the setDateModif() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModif(): void {

        // Set a Date/time mock.
        $dateModif = new DateTime("2018-09-10");

        $obj = new RepertoireCol();

        $obj->setDateModif($dateModif);
        $this->assertSame($dateModif, $obj->getDateModif());
    }

    /**
     * Tests the setEmail() method.
     *
     * @return void
     */
    public function testSetEmail(): void {

        $obj = new RepertoireCol();

        $obj->setEmail("email");
        $this->assertEquals("email", $obj->getEmail());
    }

    /**
     * Tests the setEmail2() method.
     *
     * @return void
     */
    public function testSetEmail2(): void {

        $obj = new RepertoireCol();

        $obj->setEmail2("email2");
        $this->assertEquals("email2", $obj->getEmail2());
    }

    /**
     * Tests the setFlagTel() method.
     *
     * @return void
     */
    public function testSetFlagTel(): void {

        $obj = new RepertoireCol();

        $obj->setFlagTel("flagTel");
        $this->assertEquals("flagTel", $obj->getFlagTel());
    }

    /**
     * Tests the setFlagTel2() method.
     *
     * @return void
     */
    public function testSetFlagTel2(): void {

        $obj = new RepertoireCol();

        $obj->setFlagTel2("flagTel2");
        $this->assertEquals("flagTel2", $obj->getFlagTel2());
    }

    /**
     * Tests the setFlagTel3() method.
     *
     * @return void
     */
    public function testSetFlagTel3(): void {

        $obj = new RepertoireCol();

        $obj->setFlagTel3("flagTel3");
        $this->assertEquals("flagTel3", $obj->getFlagTel3());
    }

    /**
     * Tests the setFlagTel4() method.
     *
     * @return void
     */
    public function testSetFlagTel4(): void {

        $obj = new RepertoireCol();

        $obj->setFlagTel4("flagTel4");
        $this->assertEquals("flagTel4", $obj->getFlagTel4());
    }

    /**
     * Tests the setLdapAdsPath() method.
     *
     * @return void
     */
    public function testSetLdapAdsPath(): void {

        $obj = new RepertoireCol();

        $obj->setLdapAdsPath("ldapAdsPath");
        $this->assertEquals("ldapAdsPath", $obj->getLdapAdsPath());
    }

    /**
     * Tests the setNom() method.
     *
     * @return void
     */
    public function testSetNom(): void {

        $obj = new RepertoireCol();

        $obj->setNom("nom");
        $this->assertEquals("nom", $obj->getNom());
    }

    /**
     * Tests the setNumSousRep() method.
     *
     * @return void
     */
    public function testSetNumSousRep(): void {

        $obj = new RepertoireCol();

        $obj->setNumSousRep(10);
        $this->assertEquals(10, $obj->getNumSousRep());
    }

    /**
     * Tests the setNumUniq() method.
     *
     * @return void
     */
    public function testSetNumUniq(): void {

        $obj = new RepertoireCol();

        $obj->setNumUniq(10);
        $this->assertEquals(10, $obj->getNumUniq());
    }

    /**
     * Tests the setPrenom() method.
     *
     * @return void
     */
    public function testSetPrenom(): void {

        $obj = new RepertoireCol();

        $obj->setPrenom("prenom");
        $this->assertEquals("prenom", $obj->getPrenom());
    }

    /**
     * Tests the setTel() method.
     *
     * @return void
     */
    public function testSetTel(): void {

        $obj = new RepertoireCol();

        $obj->setTel("tel");
        $this->assertEquals("tel", $obj->getTel());
    }

    /**
     * Tests the setTel2() method.
     *
     * @return void
     */
    public function testSetTel2(): void {

        $obj = new RepertoireCol();

        $obj->setTel2("tel2");
        $this->assertEquals("tel2", $obj->getTel2());
    }

    /**
     * Tests the setTel3() method.
     *
     * @return void
     */
    public function testSetTel3(): void {

        $obj = new RepertoireCol();

        $obj->setTel3("tel3");
        $this->assertEquals("tel3", $obj->getTel3());
    }

    /**
     * Tests the setTel4() method.
     *
     * @return void
     */
    public function testSetTel4(): void {

        $obj = new RepertoireCol();

        $obj->setTel4("tel4");
        $this->assertEquals("tel4", $obj->getTel4());
    }

    /**
     * Tests the setUniqId() method.
     *
     * @return void
     */
    public function testSetUniqId(): void {

        $obj = new RepertoireCol();

        $obj->setUniqId("uniqId");
        $this->assertEquals("uniqId", $obj->getUniqId());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RepertoireCol();

        $this->assertNull($obj->getAdresse1());
        $this->assertNull($obj->getAdresse2());
        $this->assertNull($obj->getAdresse3());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeComp());
        $this->assertNull($obj->getCollModif());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getDateModif());
        $this->assertNull($obj->getEmail());
        $this->assertNull($obj->getEmail2());
        $this->assertNull($obj->getFlagTel());
        $this->assertNull($obj->getFlagTel2());
        $this->assertNull($obj->getFlagTel3());
        $this->assertNull($obj->getFlagTel4());
        $this->assertNull($obj->getLdapAdsPath());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getNumSousRep());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getTel());
        $this->assertNull($obj->getTel2());
        $this->assertNull($obj->getTel3());
        $this->assertNull($obj->getTel4());
        $this->assertNull($obj->getUniqId());
    }
}
