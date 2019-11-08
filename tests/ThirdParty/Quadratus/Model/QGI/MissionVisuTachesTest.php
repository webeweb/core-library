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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\MissionVisuTaches;

/**
 * Mission visu taches test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class MissionVisuTachesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new MissionVisuTaches();

        $this->assertNull($obj->getCodeMission());
        $this->assertNull($obj->getCodeTacheVisu());
        $this->assertNull($obj->getIsRegroupement());
    }

    /**
     * Tests the setCodeMission() method.
     *
     * @return void
     */
    public function testSetCodeMission() {

        $obj = new MissionVisuTaches();

        $obj->setCodeMission("codeMission");
        $this->assertEquals("codeMission", $obj->getCodeMission());
    }

    /**
     * Tests the setCodeTacheVisu() method.
     *
     * @return void
     */
    public function testSetCodeTacheVisu() {

        $obj = new MissionVisuTaches();

        $obj->setCodeTacheVisu("codeTacheVisu");
        $this->assertEquals("codeTacheVisu", $obj->getCodeTacheVisu());
    }

    /**
     * Tests the setIsRegroupement() method.
     *
     * @return void
     */
    public function testSetIsRegroupement() {

        $obj = new MissionVisuTaches();

        $obj->setIsRegroupement(true);
        $this->assertEquals(true, $obj->getIsRegroupement());
    }
}
