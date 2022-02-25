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

use WBW\Library\Quadratus\Model\QGI\Actions;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Actions test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ActionsTest extends AbstractTestCase {

    /**
     * Tests setCodeAction()
     *
     * @return void
     */
    public function testSetCodeAction(): void {

        $obj = new Actions();

        $obj->setCodeAction("codeAction");
        $this->assertEquals("codeAction", $obj->getCodeAction());
    }

    /**
     * Tests setCodeCalcul()
     *
     * @return void
     */
    public function testSetCodeCalcul(): void {

        $obj = new Actions();

        $obj->setCodeCalcul(10);
        $this->assertEquals(10, $obj->getCodeCalcul());
    }

    /**
     * Tests setDescriptifCourt()
     *
     * @return void
     */
    public function testSetDescriptifCourt(): void {

        $obj = new Actions();

        $obj->setDescriptifCourt("descriptifCourt");
        $this->assertEquals("descriptifCourt", $obj->getDescriptifCourt());
    }

    /**
     * Tests setDescriptifLong()
     *
     * @return void
     */
    public function testSetDescriptifLong(): void {

        $obj = new Actions();

        $obj->setDescriptifLong("descriptifLong");
        $this->assertEquals("descriptifLong", $obj->getDescriptifLong());
    }

    /**
     * Tests setObligationLiee()
     *
     * @return void
     */
    public function testSetObligationLiee(): void {

        $obj = new Actions();

        $obj->setObligationLiee("obligationLiee");
        $this->assertEquals("obligationLiee", $obj->getObligationLiee());
    }

    /**
     * Tests setQuantiteHeure()
     *
     * @return void
     */
    public function testSetQuantiteHeure(): void {

        $obj = new Actions();

        $obj->setQuantiteHeure(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantiteHeure());
    }

    /**
     * Tests setRelationQh()
     *
     * @return void
     */
    public function testSetRelationQh(): void {

        $obj = new Actions();

        $obj->setRelationQh(true);
        $this->assertEquals(true, $obj->getRelationQh());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Actions();

        $this->assertNull($obj->getCodeAction());
        $this->assertNull($obj->getCodeCalcul());
        $this->assertNull($obj->getDescriptifCourt());
        $this->assertNull($obj->getDescriptifLong());
        $this->assertNull($obj->getObligationLiee());
        $this->assertNull($obj->getQuantiteHeure());
        $this->assertNull($obj->getRelationQh());
    }
}
