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

use WBW\Library\Quadratus\Model\Proprete\ConstTabTvaVente;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Const tab tva vente test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class ConstTabTvaVenteTest extends AbstractTestCase {

    /**
     * Tests setCodeTvaArticle()
     *
     * @return void
     */
    public function testSetCodeTvaArticle(): void {

        $obj = new ConstTabTvaVente();

        $obj->setCodeTvaArticle("codeTvaArticle");
        $this->assertEquals("codeTvaArticle", $obj->getCodeTvaArticle());
    }

    /**
     * Tests setCodeTvaClient()
     *
     * @return void
     */
    public function testSetCodeTvaClient(): void {

        $obj = new ConstTabTvaVente();

        $obj->setCodeTvaClient("codeTvaClient");
        $this->assertEquals("codeTvaClient", $obj->getCodeTvaClient());
    }

    /**
     * Tests setCompteTva()
     *
     * @return void
     */
    public function testSetCompteTva(): void {

        $obj = new ConstTabTvaVente();

        $obj->setCompteTva("compteTva");
        $this->assertEquals("compteTva", $obj->getCompteTva());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new ConstTabTvaVente();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setTauxTva()
     *
     * @return void
     */
    public function testSetTauxTva(): void {

        $obj = new ConstTabTvaVente();

        $obj->setTauxTva(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTva());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ConstTabTvaVente();

        $this->assertNull($obj->getCodeTvaArticle());
        $this->assertNull($obj->getCodeTvaClient());
        $this->assertNull($obj->getCompteTva());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getTauxTva());
    }
}
