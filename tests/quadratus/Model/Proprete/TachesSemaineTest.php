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

use WBW\Library\Quadratus\Model\Proprete\TachesSemaine;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Taches semaine test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class TachesSemaineTest extends AbstractTestCase {

    /**
     * Tests setAutoIncr()
     *
     * @return void
     */
    public function testSetAutoIncr(): void {

        $obj = new TachesSemaine();

        $obj->setAutoIncr(10);
        $this->assertEquals(10, $obj->getAutoIncr());
    }

    /**
     * Tests setCodeSemaineTache()
     *
     * @return void
     */
    public function testSetCodeSemaineTache(): void {

        $obj = new TachesSemaine();

        $obj->setCodeSemaineTache("codeSemaineTache");
        $this->assertEquals("codeSemaineTache", $obj->getCodeSemaineTache());
    }

    /**
     * Tests setDiscrTache()
     *
     * @return void
     */
    public function testSetDiscrTache(): void {

        $obj = new TachesSemaine();

        $obj->setDiscrTache(10);
        $this->assertEquals(10, $obj->getDiscrTache());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TachesSemaine();

        $this->assertNull($obj->getAutoIncr());
        $this->assertNull($obj->getCodeSemaineTache());
        $this->assertNull($obj->getDiscrTache());
    }
}
