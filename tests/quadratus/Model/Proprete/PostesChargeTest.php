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

use WBW\Library\Quadratus\Model\Proprete\PostesCharge;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Postes charge test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class PostesChargeTest extends AbstractTestCase {

    /**
     * Tests setActif()
     *
     * @return void
     */
    public function testSetActif(): void {

        $obj = new PostesCharge();

        $obj->setActif(true);
        $this->assertEquals(true, $obj->getActif());
    }

    /**
     * Tests setCodeCharge()
     *
     * @return void
     */
    public function testSetCodeCharge(): void {

        $obj = new PostesCharge();

        $obj->setCodeCharge("codeCharge");
        $this->assertEquals("codeCharge", $obj->getCodeCharge());
    }

    /**
     * Tests setDernPosteAffecte()
     *
     * @return void
     */
    public function testSetDernPosteAffecte(): void {

        $obj = new PostesCharge();

        $obj->setDernPosteAffecte("dernPosteAffecte");
        $this->assertEquals("dernPosteAffecte", $obj->getDernPosteAffecte());
    }

    /**
     * Tests setDescription()
     *
     * @return void
     */
    public function testSetDescription(): void {

        $obj = new PostesCharge();

        $obj->setDescription("description");
        $this->assertEquals("description", $obj->getDescription());
    }

    /**
     * Tests setPosteRent()
     *
     * @return void
     */
    public function testSetPosteRent(): void {

        $obj = new PostesCharge();

        $obj->setPosteRent("posteRent");
        $this->assertEquals("posteRent", $obj->getPosteRent());
    }

    /**
     * Tests setTypeProrata()
     *
     * @return void
     */
    public function testSetTypeProrata(): void {

        $obj = new PostesCharge();

        $obj->setTypeProrata("typeProrata");
        $this->assertEquals("typeProrata", $obj->getTypeProrata());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PostesCharge();

        $this->assertNull($obj->getActif());
        $this->assertNull($obj->getCodeCharge());
        $this->assertNull($obj->getDernPosteAffecte());
        $this->assertNull($obj->getDescription());
        $this->assertNull($obj->getPosteRent());
        $this->assertNull($obj->getTypeProrata());
    }
}
