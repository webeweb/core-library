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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\iCollaborateursSites;

/**
 * i collaborateurs sites model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class iCollaborateursSitesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new iCollaborateursSites();

        $this->assertNull($obj->getAdresseIP());
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

    /**
     * Tests the setAdresseIP() method.
     *
     * @return void
     */
    public function testSetAdresseIP() {

        $obj = new iCollaborateursSites();

        $obj->setAdresseIP("adresseIP");
        $this->assertEquals("adresseIP", $obj->getAdresseIP());
    }

    /**
     * Tests the setCodeCollab() method.
     *
     * @return void
     */
    public function testSetCodeCollab() {

        $obj = new iCollaborateursSites();

        $obj->setCodeCollab("codeCollab");
        $this->assertEquals("codeCollab", $obj->getCodeCollab());
    }

    /**
     * Tests the setDossier() method.
     *
     * @return void
     */
    public function testSetDossier() {

        $obj = new iCollaborateursSites();

        $obj->setDossier("dossier");
        $this->assertEquals("dossier", $obj->getDossier());
    }

    /**
     * Tests the setRestrCliAssist1() method.
     *
     * @return void
     */
    public function testSetRestrCliAssist1() {

        $obj = new iCollaborateursSites();

        $obj->setRestrCliAssist1("restrCliAssist1");
        $this->assertEquals("restrCliAssist1", $obj->getRestrCliAssist1());
    }

    /**
     * Tests the setRestrCliAssist2() method.
     *
     * @return void
     */
    public function testSetRestrCliAssist2() {

        $obj = new iCollaborateursSites();

        $obj->setRestrCliAssist2("restrCliAssist2");
        $this->assertEquals("restrCliAssist2", $obj->getRestrCliAssist2());
    }

    /**
     * Tests the setRestrCliAutre1() method.
     *
     * @return void
     */
    public function testSetRestrCliAutre1() {

        $obj = new iCollaborateursSites();

        $obj->setRestrCliAutre1("restrCliAutre1");
        $this->assertEquals("restrCliAutre1", $obj->getRestrCliAutre1());
    }

    /**
     * Tests the setRestrCliAutre2() method.
     *
     * @return void
     */
    public function testSetRestrCliAutre2() {

        $obj = new iCollaborateursSites();

        $obj->setRestrCliAutre2("restrCliAutre2");
        $this->assertEquals("restrCliAutre2", $obj->getRestrCliAutre2());
    }

    /**
     * Tests the setRestrCliCollab() method.
     *
     * @return void
     */
    public function testSetRestrCliCollab() {

        $obj = new iCollaborateursSites();

        $obj->setRestrCliCollab("restrCliCollab");
        $this->assertEquals("restrCliCollab", $obj->getRestrCliCollab());
    }

    /**
     * Tests the setRestrCliExpert() method.
     *
     * @return void
     */
    public function testSetRestrCliExpert() {

        $obj = new iCollaborateursSites();

        $obj->setRestrCliExpert("restrCliExpert");
        $this->assertEquals("restrCliExpert", $obj->getRestrCliExpert());
    }

    /**
     * Tests the setRestrCliPortef() method.
     *
     * @return void
     */
    public function testSetRestrCliPortef() {

        $obj = new iCollaborateursSites();

        $obj->setRestrCliPortef("restrCliPortef");
        $this->assertEquals("restrCliPortef", $obj->getRestrCliPortef());
    }
}
