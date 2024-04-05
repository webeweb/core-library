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

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QGI\RepertoireCol;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Repertoire col test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class RepertoireColTest extends AbstractTestCase {

    /**
     * Test setAdresse1()
     *
     * @return void
     */
    public function testSetAdresse1(): void {

        $obj = new RepertoireCol();

        $obj->setAdresse1("adresse1");
        $this->assertEquals("adresse1", $obj->getAdresse1());
    }

    /**
     * Test setAdresse2()
     *
     * @return void
     */
    public function testSetAdresse2(): void {

        $obj = new RepertoireCol();

        $obj->setAdresse2("adresse2");
        $this->assertEquals("adresse2", $obj->getAdresse2());
    }

    /**
     * Test setAdresse3()
     *
     * @return void
     */
    public function testSetAdresse3(): void {

        $obj = new RepertoireCol();

        $obj->setAdresse3("adresse3");
        $this->assertEquals("adresse3", $obj->getAdresse3());
    }

    /**
     * Test setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new RepertoireCol();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Test setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new RepertoireCol();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Test setCodeComp()
     *
     * @return void
     */
    public function testSetCodeComp(): void {

        $obj = new RepertoireCol();

        $obj->setCodeComp("codeComp");
        $this->assertEquals("codeComp", $obj->getCodeComp());
    }

    /**
     * Test setCollModif()
     *
     * @return void
     */
    public function testSetCollModif(): void {

        $obj = new RepertoireCol();

        $obj->setCollModif("collModif");
        $this->assertEquals("collModif", $obj->getCollModif());
    }

    /**
     * Test setCommentaire()
     *
     * @return void
     */
    public function testSetCommentaire(): void {

        $obj = new RepertoireCol();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Test setDateModif()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateModif(): void {

        // Set a Date/time mock.
        $dateModif = new DateTime("2018-09-10");

        $obj = new RepertoireCol();

        $obj->setDateModif($dateModif);
        $this->assertSame($dateModif, $obj->getDateModif());
    }

    /**
     * Test setEmail()
     *
     * @return void
     */
    public function testSetEmail(): void {

        $obj = new RepertoireCol();

        $obj->setEmail("email");
        $this->assertEquals("email", $obj->getEmail());
    }

    /**
     * Test setEmail2()
     *
     * @return void
     */
    public function testSetEmail2(): void {

        $obj = new RepertoireCol();

        $obj->setEmail2("email2");
        $this->assertEquals("email2", $obj->getEmail2());
    }

    /**
     * Test setFlagTel()
     *
     * @return void
     */
    public function testSetFlagTel(): void {

        $obj = new RepertoireCol();

        $obj->setFlagTel("flagTel");
        $this->assertEquals("flagTel", $obj->getFlagTel());
    }

    /**
     * Test setFlagTel2()
     *
     * @return void
     */
    public function testSetFlagTel2(): void {

        $obj = new RepertoireCol();

        $obj->setFlagTel2("flagTel2");
        $this->assertEquals("flagTel2", $obj->getFlagTel2());
    }

    /**
     * Test setFlagTel3()
     *
     * @return void
     */
    public function testSetFlagTel3(): void {

        $obj = new RepertoireCol();

        $obj->setFlagTel3("flagTel3");
        $this->assertEquals("flagTel3", $obj->getFlagTel3());
    }

    /**
     * Test setFlagTel4()
     *
     * @return void
     */
    public function testSetFlagTel4(): void {

        $obj = new RepertoireCol();

        $obj->setFlagTel4("flagTel4");
        $this->assertEquals("flagTel4", $obj->getFlagTel4());
    }

    /**
     * Test setLdapAdsPath()
     *
     * @return void
     */
    public function testSetLdapAdsPath(): void {

        $obj = new RepertoireCol();

        $obj->setLdapAdsPath("ldapAdsPath");
        $this->assertEquals("ldapAdsPath", $obj->getLdapAdsPath());
    }

    /**
     * Test setNom()
     *
     * @return void
     */
    public function testSetNom(): void {

        $obj = new RepertoireCol();

        $obj->setNom("nom");
        $this->assertEquals("nom", $obj->getNom());
    }

    /**
     * Test setNumSousRep()
     *
     * @return void
     */
    public function testSetNumSousRep(): void {

        $obj = new RepertoireCol();

        $obj->setNumSousRep(10);
        $this->assertEquals(10, $obj->getNumSousRep());
    }

    /**
     * Test setNumUniq()
     *
     * @return void
     */
    public function testSetNumUniq(): void {

        $obj = new RepertoireCol();

        $obj->setNumUniq(10);
        $this->assertEquals(10, $obj->getNumUniq());
    }

    /**
     * Test setPrenom()
     *
     * @return void
     */
    public function testSetPrenom(): void {

        $obj = new RepertoireCol();

        $obj->setPrenom("prenom");
        $this->assertEquals("prenom", $obj->getPrenom());
    }

    /**
     * Test setTel()
     *
     * @return void
     */
    public function testSetTel(): void {

        $obj = new RepertoireCol();

        $obj->setTel("tel");
        $this->assertEquals("tel", $obj->getTel());
    }

    /**
     * Test setTel2()
     *
     * @return void
     */
    public function testSetTel2(): void {

        $obj = new RepertoireCol();

        $obj->setTel2("tel2");
        $this->assertEquals("tel2", $obj->getTel2());
    }

    /**
     * Test setTel3()
     *
     * @return void
     */
    public function testSetTel3(): void {

        $obj = new RepertoireCol();

        $obj->setTel3("tel3");
        $this->assertEquals("tel3", $obj->getTel3());
    }

    /**
     * Test setTel4()
     *
     * @return void
     */
    public function testSetTel4(): void {

        $obj = new RepertoireCol();

        $obj->setTel4("tel4");
        $this->assertEquals("tel4", $obj->getTel4());
    }

    /**
     * Test setUniqId()
     *
     * @return void
     */
    public function testSetUniqId(): void {

        $obj = new RepertoireCol();

        $obj->setUniqId("uniqId");
        $this->assertEquals("uniqId", $obj->getUniqId());
    }

    /**
     * Test __construct()
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
