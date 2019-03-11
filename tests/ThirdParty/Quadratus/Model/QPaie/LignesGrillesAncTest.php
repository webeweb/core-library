<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\LignesGrillesAnc;

/**
 * Lignes grilles anc model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class LignesGrillesAncTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new LignesGrillesAnc();

        $this->assertNull($obj->getCodeGrille());
        $this->assertNull($obj->getNbMoisEcoules());
        $this->assertNull($obj->getValeur());
    }

    /**
     * Tests the setCodeGrille() method.
     *
     * @return void
     */
    public function testSetCodeGrille() {

        $obj = new LignesGrillesAnc();

        $obj->setCodeGrille("codeGrille");
        $this->assertEquals("codeGrille", $obj->getCodeGrille());
    }

    /**
     * Tests the setNbMoisEcoules() method.
     *
     * @return void
     */
    public function testSetNbMoisEcoules() {

        $obj = new LignesGrillesAnc();

        $obj->setNbMoisEcoules(10);
        $this->assertEquals(10, $obj->getNbMoisEcoules());
    }

    /**
     * Tests the setValeur() method.
     *
     * @return void
     */
    public function testSetValeur() {

        $obj = new LignesGrillesAnc();

        $obj->setValeur(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur());
    }
}
