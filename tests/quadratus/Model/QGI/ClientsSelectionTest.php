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

use WBW\Library\Quadratus\Model\QGI\ClientsSelection;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Clients selection test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ClientsSelectionTest extends AbstractTestCase {

    /**
     * Tests setChamp()
     *
     * @return void
     */
    public function testSetChamp(): void {

        $obj = new ClientsSelection();

        $obj->setChamp("champ");
        $this->assertEquals("champ", $obj->getChamp());
    }

    /**
     * Tests setCodeCol()
     *
     * @return void
     */
    public function testSetCodeCol(): void {

        $obj = new ClientsSelection();

        $obj->setCodeCol("codeCol");
        $this->assertEquals("codeCol", $obj->getCodeCol());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new ClientsSelection();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new ClientsSelection();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests setValeur()
     *
     * @return void
     */
    public function testSetValeur(): void {

        $obj = new ClientsSelection();

        $obj->setValeur("valeur");
        $this->assertEquals("valeur", $obj->getValeur());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ClientsSelection();

        $this->assertNull($obj->getChamp());
        $this->assertNull($obj->getCodeCol());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getValeur());
    }
}
