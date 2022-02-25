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

use WBW\Library\Quadratus\Model\Proprete\DataSynchroSupprime;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Data synchro supprime test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class DataSynchroSupprimeTest extends AbstractTestCase {

    /**
     * Tests setTypeData()
     *
     * @return void
     */
    public function testSetTypeData(): void {

        $obj = new DataSynchroSupprime();

        $obj->setTypeData("typeData");
        $this->assertEquals("typeData", $obj->getTypeData());
    }

    /**
     * Tests setUniqIdBlocage()
     *
     * @return void
     */
    public function testSetUniqIdBlocage(): void {

        $obj = new DataSynchroSupprime();

        $obj->setUniqIdBlocage("uniqIdBlocage");
        $this->assertEquals("uniqIdBlocage", $obj->getUniqIdBlocage());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DataSynchroSupprime();

        $this->assertNull($obj->getTypeData());
        $this->assertNull($obj->getUniqIdBlocage());
    }
}
