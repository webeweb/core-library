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

use WBW\Library\Quadratus\Model\QGI\MissionVisuTaches;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Mission visu taches test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class MissionVisuTachesTest extends AbstractTestCase {

    /**
     * Tests setCodeMission()
     *
     * @return void
     */
    public function testSetCodeMission(): void {

        $obj = new MissionVisuTaches();

        $obj->setCodeMission("codeMission");
        $this->assertEquals("codeMission", $obj->getCodeMission());
    }

    /**
     * Tests setCodeTacheVisu()
     *
     * @return void
     */
    public function testSetCodeTacheVisu(): void {

        $obj = new MissionVisuTaches();

        $obj->setCodeTacheVisu("codeTacheVisu");
        $this->assertEquals("codeTacheVisu", $obj->getCodeTacheVisu());
    }

    /**
     * Tests setIsRegroupement()
     *
     * @return void
     */
    public function testSetIsRegroupement(): void {

        $obj = new MissionVisuTaches();

        $obj->setIsRegroupement(true);
        $this->assertEquals(true, $obj->getIsRegroupement());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new MissionVisuTaches();

        $this->assertNull($obj->getCodeMission());
        $this->assertNull($obj->getCodeTacheVisu());
        $this->assertNull($obj->getIsRegroupement());
    }
}
