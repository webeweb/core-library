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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\ConstTabAnalVente;

/**
 * Const tab anal vente test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class ConstTabAnalVenteTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ConstTabAnalVente();

        $this->assertNull($obj->getCodeAnalArticle());
        $this->assertNull($obj->getCodeAnalClient());
        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getCodeNature());
        $this->assertNull($obj->getType());
    }

    /**
     * Tests the setCodeAnalArticle() method.
     *
     * @return void
     */
    public function testSetCodeAnalArticle() {

        $obj = new ConstTabAnalVente();

        $obj->setCodeAnalArticle("codeAnalArticle");
        $this->assertEquals("codeAnalArticle", $obj->getCodeAnalArticle());
    }

    /**
     * Tests the setCodeAnalClient() method.
     *
     * @return void
     */
    public function testSetCodeAnalClient() {

        $obj = new ConstTabAnalVente();

        $obj->setCodeAnalClient("codeAnalClient");
        $this->assertEquals("codeAnalClient", $obj->getCodeAnalClient());
    }

    /**
     * Tests the setCodeCentre() method.
     *
     * @return void
     */
    public function testSetCodeCentre() {

        $obj = new ConstTabAnalVente();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests the setCodeNature() method.
     *
     * @return void
     */
    public function testSetCodeNature() {

        $obj = new ConstTabAnalVente();

        $obj->setCodeNature("codeNature");
        $this->assertEquals("codeNature", $obj->getCodeNature());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType() {

        $obj = new ConstTabAnalVente();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }
}
