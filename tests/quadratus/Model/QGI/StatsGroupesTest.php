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

use WBW\Library\Quadratus\Model\QGI\StatsGroupes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Stats groupes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class StatsGroupesTest extends AbstractTestCase {

    /**
     * Tests setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new StatsGroupes();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests setGroupeStat()
     *
     * @return void
     */
    public function testSetGroupeStat(): void {

        $obj = new StatsGroupes();

        $obj->setGroupeStat("groupeStat");
        $this->assertEquals("groupeStat", $obj->getGroupeStat());
    }

    /**
     * Tests setTypeChamp()
     *
     * @return void
     */
    public function testSetTypeChamp(): void {

        $obj = new StatsGroupes();

        $obj->setTypeChamp("typeChamp");
        $this->assertEquals("typeChamp", $obj->getTypeChamp());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new StatsGroupes();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getGroupeStat());
        $this->assertNull($obj->getTypeChamp());
    }
}
