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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\DetailsMissions;

/**
 * Details missions test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class DetailsMissionsTest extends AbstractTestCase {

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new DetailsMissions();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeMission() method.
     *
     * @return void
     */
    public function testSetCodeMission() {

        $obj = new DetailsMissions();

        $obj->setCodeMission("codeMission");
        $this->assertEquals("codeMission", $obj->getCodeMission());
    }

    /**
     * Tests the setCodeTravail() method.
     *
     * @return void
     */
    public function testSetCodeTravail() {

        $obj = new DetailsMissions();

        $obj->setCodeTravail("codeTravail");
        $this->assertEquals("codeTravail", $obj->getCodeTravail());
    }

    /**
     * Tests the setNiveau() method.
     *
     * @return void
     */
    public function testSetNiveau() {

        $obj = new DetailsMissions();

        $obj->setNiveau(10);
        $this->assertEquals(10, $obj->getNiveau());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne() {

        $obj = new DetailsMissions();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setTypeAffectation() method.
     *
     * @return void
     */
    public function testSetTypeAffectation() {

        $obj = new DetailsMissions();

        $obj->setTypeAffectation("typeAffectation");
        $this->assertEquals("typeAffectation", $obj->getTypeAffectation());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new DetailsMissions();

        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeMission());
        $this->assertNull($obj->getCodeTravail());
        $this->assertNull($obj->getNiveau());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getTypeAffectation());
    }
}
