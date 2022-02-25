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

use WBW\Library\Quadratus\Model\Proprete\ConstTabVentilVente;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Const tab ventil vente test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class ConstTabVentilVenteTest extends AbstractTestCase {

    /**
     * Tests setCodeVentilArticle()
     *
     * @return void
     */
    public function testSetCodeVentilArticle(): void {

        $obj = new ConstTabVentilVente();

        $obj->setCodeVentilArticle("codeVentilArticle");
        $this->assertEquals("codeVentilArticle", $obj->getCodeVentilArticle());
    }

    /**
     * Tests setCodeVentilClient()
     *
     * @return void
     */
    public function testSetCodeVentilClient(): void {

        $obj = new ConstTabVentilVente();

        $obj->setCodeVentilClient("codeVentilClient");
        $this->assertEquals("codeVentilClient", $obj->getCodeVentilClient());
    }

    /**
     * Tests setCompteVentil()
     *
     * @return void
     */
    public function testSetCompteVentil(): void {

        $obj = new ConstTabVentilVente();

        $obj->setCompteVentil("compteVentil");
        $this->assertEquals("compteVentil", $obj->getCompteVentil());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new ConstTabVentilVente();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ConstTabVentilVente();

        $this->assertNull($obj->getCodeVentilArticle());
        $this->assertNull($obj->getCodeVentilClient());
        $this->assertNull($obj->getCompteVentil());
        $this->assertNull($obj->getLibelle());
    }
}
