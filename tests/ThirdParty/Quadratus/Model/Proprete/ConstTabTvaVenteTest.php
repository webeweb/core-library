<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\ConstTabTvaVente;

/**
 * Const tab tva vente test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class ConstTabTvaVenteTest extends AbstractTestCase {

    /**
     * Tests the setCodeTvaArticle() method.
     *
     * @return void
     */
    public function testSetCodeTvaArticle(): void {

        $obj = new ConstTabTvaVente();

        $obj->setCodeTvaArticle("codeTvaArticle");
        $this->assertEquals("codeTvaArticle", $obj->getCodeTvaArticle());
    }

    /**
     * Tests the setCodeTvaClient() method.
     *
     * @return void
     */
    public function testSetCodeTvaClient(): void {

        $obj = new ConstTabTvaVente();

        $obj->setCodeTvaClient("codeTvaClient");
        $this->assertEquals("codeTvaClient", $obj->getCodeTvaClient());
    }

    /**
     * Tests the setCompteTva() method.
     *
     * @return void
     */
    public function testSetCompteTva(): void {

        $obj = new ConstTabTvaVente();

        $obj->setCompteTva("compteTva");
        $this->assertEquals("compteTva", $obj->getCompteTva());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new ConstTabTvaVente();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setTauxTva() method.
     *
     * @return void
     */
    public function testSetTauxTva(): void {

        $obj = new ConstTabTvaVente();

        $obj->setTauxTva(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTva());
    }

    /**
     * Tests the __construct() method.
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
