<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use WBW\Library\Quadratus\Model\QCompta\Regroupement;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Regroupement test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class RegroupementTest extends AbstractTestCase {

    /**
     * Tests setClasse()
     *
     * @return void
     */
    public function testSetClasse(): void {

        $obj = new Regroupement();

        $obj->setClasse("classe");
        $this->assertEquals("classe", $obj->getClasse());
    }

    /**
     * Tests setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new Regroupement();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Regroupement();

        $this->assertNull($obj->getClasse());
        $this->assertNull($obj->getIntitule());
    }
}
