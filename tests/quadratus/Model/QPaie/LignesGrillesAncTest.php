<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use WBW\Library\Quadratus\Model\QPaie\LignesGrillesAnc;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Lignes grilles anc test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class LignesGrillesAncTest extends AbstractTestCase {

    /**
     * Tests setCodeGrille()
     *
     * @return void
     */
    public function testSetCodeGrille(): void {

        $obj = new LignesGrillesAnc();

        $obj->setCodeGrille("codeGrille");
        $this->assertEquals("codeGrille", $obj->getCodeGrille());
    }

    /**
     * Tests setNbMoisEcoules()
     *
     * @return void
     */
    public function testSetNbMoisEcoules(): void {

        $obj = new LignesGrillesAnc();

        $obj->setNbMoisEcoules(10);
        $this->assertEquals(10, $obj->getNbMoisEcoules());
    }

    /**
     * Tests setValeur()
     *
     * @return void
     */
    public function testSetValeur(): void {

        $obj = new LignesGrillesAnc();

        $obj->setValeur(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new LignesGrillesAnc();

        $this->assertNull($obj->getCodeGrille());
        $this->assertNull($obj->getNbMoisEcoules());
        $this->assertNull($obj->getValeur());
    }
}
