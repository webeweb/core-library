<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use WBW\Library\Quadratus\Model\QGI\iCollaborateursSites;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * i collaborateurs sites test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class iCollaborateursSitesTest extends AbstractTestCase {

    /**
     * Tests the setAdresseIp() method.
     *
     * @return void
     */
    public function testSetAdresseIp(): void {

        $obj = new iCollaborateursSites();

        $obj->setAdresseIp("adresseIp");
        $this->assertEquals("adresseIp", $obj->getAdresseIp());
    }

    /**
     * Tests the setCodeCollab() method.
     *
     * @return void
     */
    public function testSetCodeCollab(): void {

        $obj = new iCollaborateursSites();

        $obj->setCodeCollab("codeCollab");
        $this->assertEquals("codeCollab", $obj->getCodeCollab());
    }

    /**
     * Tests the setDossier() method.
     *
     * @return void
     */
    public function testSetDossier(): void {

        $obj = new iCollaborateursSites();

        $obj->setDossier("dossier");
        $this->assertEquals("dossier", $obj->getDossier());
    }

    /**
     * Tests the setRestrCliAssist1() method.
     *
     * @return void
     */
    public function testSetRestrCliAssist1(): void {

        $obj = new iCollaborateursSites();

        $obj->setRestrCliAssist1("restrCliAssist1");
        $this->assertEquals("restrCliAssist1", $obj->getRestrCliAssist1());
    }

    /**
     * Tests the setRestrCliAssist2() method.
     *
     * @return void
     */
    public function testSetRestrCliAssist2(): void {

        $obj = new iCollaborateursSites();

        $obj->setRestrCliAssist2("restrCliAssist2");
        $this->assertEquals("restrCliAssist2", $obj->getRestrCliAssist2());
    }

    /**
     * Tests the setRestrCliAutre1() method.
     *
     * @return void
     */
    public function testSetRestrCliAutre1(): void {

        $obj = new iCollaborateursSites();

        $obj->setRestrCliAutre1("restrCliAutre1");
        $this->assertEquals("restrCliAutre1", $obj->getRestrCliAutre1());
    }

    /**
     * Tests the setRestrCliAutre2() method.
     *
     * @return void
     */
    public function testSetRestrCliAutre2(): void {

        $obj = new iCollaborateursSites();

        $obj->setRestrCliAutre2("restrCliAutre2");
        $this->assertEquals("restrCliAutre2", $obj->getRestrCliAutre2());
    }

    /**
     * Tests the setRestrCliCollab() method.
     *
     * @return void
     */
    public function testSetRestrCliCollab(): void {

        $obj = new iCollaborateursSites();

        $obj->setRestrCliCollab("restrCliCollab");
        $this->assertEquals("restrCliCollab", $obj->getRestrCliCollab());
    }

    /**
     * Tests the setRestrCliExpert() method.
     *
     * @return void
     */
    public function testSetRestrCliExpert(): void {

        $obj = new iCollaborateursSites();

        $obj->setRestrCliExpert("restrCliExpert");
        $this->assertEquals("restrCliExpert", $obj->getRestrCliExpert());
    }

    /**
     * Tests the setRestrCliPortef() method.
     *
     * @return void
     */
    public function testSetRestrCliPortef(): void {

        $obj = new iCollaborateursSites();

        $obj->setRestrCliPortef("restrCliPortef");
        $this->assertEquals("restrCliPortef", $obj->getRestrCliPortef());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new iCollaborateursSites();

        $this->assertNull($obj->getAdresseIp());
        $this->assertNull($obj->getCodeCollab());
        $this->assertNull($obj->getDossier());
        $this->assertNull($obj->getRestrCliAssist1());
        $this->assertNull($obj->getRestrCliAssist2());
        $this->assertNull($obj->getRestrCliAutre1());
        $this->assertNull($obj->getRestrCliAutre2());
        $this->assertNull($obj->getRestrCliCollab());
        $this->assertNull($obj->getRestrCliExpert());
        $this->assertNull($obj->getRestrCliPortef());
    }
}
