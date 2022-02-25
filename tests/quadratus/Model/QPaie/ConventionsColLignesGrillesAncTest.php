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

use WBW\Library\Quadratus\Model\QPaie\ConventionsColLignesGrillesAnc;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Conventions col lignes grilles anc test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class ConventionsColLignesGrillesAncTest extends AbstractTestCase {

    /**
     * Tests setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new ConventionsColLignesGrillesAnc();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests setCodeConvention()
     *
     * @return void
     */
    public function testSetCodeConvention(): void {

        $obj = new ConventionsColLignesGrillesAnc();

        $obj->setCodeConvention("codeConvention");
        $this->assertEquals("codeConvention", $obj->getCodeConvention());
    }

    /**
     * Tests setNbMoisEcoules()
     *
     * @return void
     */
    public function testSetNbMoisEcoules(): void {

        $obj = new ConventionsColLignesGrillesAnc();

        $obj->setNbMoisEcoules(10);
        $this->assertEquals(10, $obj->getNbMoisEcoules());
    }

    /**
     * Tests setValeur()
     *
     * @return void
     */
    public function testSetValeur(): void {

        $obj = new ConventionsColLignesGrillesAnc();

        $obj->setValeur(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ConventionsColLignesGrillesAnc();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeConvention());
        $this->assertNull($obj->getNbMoisEcoules());
        $this->assertNull($obj->getValeur());
    }
}
