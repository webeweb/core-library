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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\TranchesHSup;

/**
 * Tranches h sup test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class TranchesHSupTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TranchesHSup();

        $this->assertNull($obj->getNbHeures());
        $this->assertNull($obj->getTaux());
        $this->assertNull($obj->getType());
    }

    /**
     * Tests the setNbHeures() method.
     *
     * @return void
     */
    public function testSetNbHeures() {

        $obj = new TranchesHSup();

        $obj->setNbHeures(10);
        $this->assertEquals(10, $obj->getNbHeures());
    }

    /**
     * Tests the setTaux() method.
     *
     * @return void
     */
    public function testSetTaux() {

        $obj = new TranchesHSup();

        $obj->setTaux(10.092018);
        $this->assertEquals(10.092018, $obj->getTaux());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType() {

        $obj = new TranchesHSup();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }
}
