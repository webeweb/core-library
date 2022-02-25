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

use WBW\Library\Quadratus\Model\Proprete\DetailCharges;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Detail charges test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class DetailChargesTest extends AbstractTestCase {

    /**
     * Tests setCommentaire()
     *
     * @return void
     */
    public function testSetCommentaire(): void {

        $obj = new DetailCharges();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Tests setMontant()
     *
     * @return void
     */
    public function testSetMontant(): void {

        $obj = new DetailCharges();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Tests setNumLigne()
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new DetailCharges();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests setUniqId()
     *
     * @return void
     */
    public function testSetUniqId(): void {

        $obj = new DetailCharges();

        $obj->setUniqId("uniqId");
        $this->assertEquals("uniqId", $obj->getUniqId());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DetailCharges();

        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getUniqId());
    }
}
