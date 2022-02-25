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

use WBW\Library\Quadratus\Model\QCompta\Comptes3;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Comptes3 test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class Comptes3Test extends AbstractTestCase {

    /**
     * Tests setCodeSection()
     *
     * @return void
     */
    public function testSetCodeSection(): void {

        $obj = new Comptes3();

        $obj->setCodeSection("codeSection");
        $this->assertEquals("codeSection", $obj->getCodeSection());
    }

    /**
     * Tests setNumeroCompte()
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new Comptes3();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests setPourcentRepart()
     *
     * @return void
     */
    public function testSetPourcentRepart(): void {

        $obj = new Comptes3();

        $obj->setPourcentRepart(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentRepart());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Comptes3();

        $this->assertNull($obj->getCodeSection());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getPourcentRepart());
    }
}
