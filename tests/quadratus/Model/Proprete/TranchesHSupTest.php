<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use WBW\Library\Quadratus\Model\Proprete\TranchesHSup;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Tranches h sup test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class TranchesHSupTest extends AbstractTestCase {

    /**
     * Tests setNbHeures()
     *
     * @return void
     */
    public function testSetNbHeures(): void {

        $obj = new TranchesHSup();

        $obj->setNbHeures(10);
        $this->assertEquals(10, $obj->getNbHeures());
    }

    /**
     * Tests setTaux()
     *
     * @return void
     */
    public function testSetTaux(): void {

        $obj = new TranchesHSup();

        $obj->setTaux(10.092018);
        $this->assertEquals(10.092018, $obj->getTaux());
    }

    /**
     * Tests setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new TranchesHSup();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TranchesHSup();

        $this->assertNull($obj->getNbHeures());
        $this->assertNull($obj->getTaux());
        $this->assertNull($obj->getType());
    }
}
