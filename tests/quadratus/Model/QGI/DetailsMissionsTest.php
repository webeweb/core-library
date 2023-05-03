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

use WBW\Library\Quadratus\Model\QGI\DetailsMissions;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Details missions test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class DetailsMissionsTest extends AbstractTestCase {

    /**
     * Test setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new DetailsMissions();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Test setCodeMission()
     *
     * @return void
     */
    public function testSetCodeMission(): void {

        $obj = new DetailsMissions();

        $obj->setCodeMission("codeMission");
        $this->assertEquals("codeMission", $obj->getCodeMission());
    }

    /**
     * Test setCodeTravail()
     *
     * @return void
     */
    public function testSetCodeTravail(): void {

        $obj = new DetailsMissions();

        $obj->setCodeTravail("codeTravail");
        $this->assertEquals("codeTravail", $obj->getCodeTravail());
    }

    /**
     * Test setNiveau()
     *
     * @return void
     */
    public function testSetNiveau(): void {

        $obj = new DetailsMissions();

        $obj->setNiveau(10);
        $this->assertEquals(10, $obj->getNiveau());
    }

    /**
     * Test setNumLigne()
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new DetailsMissions();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Test setTypeAffectation()
     *
     * @return void
     */
    public function testSetTypeAffectation(): void {

        $obj = new DetailsMissions();

        $obj->setTypeAffectation("typeAffectation");
        $this->assertEquals("typeAffectation", $obj->getTypeAffectation());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DetailsMissions();

        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeMission());
        $this->assertNull($obj->getCodeTravail());
        $this->assertNull($obj->getNiveau());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getTypeAffectation());
    }
}
