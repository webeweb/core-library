<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\Proprete;

use WBW\Library\Core\Quadratus\Model\Proprete\ConstTabAnalAchat;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Const tab anal achat model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class ConstTabAnalAchatTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ConstTabAnalAchat();

        $this->assertNull($obj->getCodeAnalArticle());
        $this->assertNull($obj->getCodeAnalFourn());
        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getCodeNature());
    }

    /**
     * Tests the setCodeAnalArticle() method.
     *
     * @return void
     */
    public function testSetCodeAnalArticle() {

        $obj = new ConstTabAnalAchat();

        $obj->setCodeAnalArticle("codeAnalArticle");
        $this->assertEquals("codeAnalArticle", $obj->getCodeAnalArticle());
    }

    /**
     * Tests the setCodeAnalFourn() method.
     *
     * @return void
     */
    public function testSetCodeAnalFourn() {

        $obj = new ConstTabAnalAchat();

        $obj->setCodeAnalFourn("codeAnalFourn");
        $this->assertEquals("codeAnalFourn", $obj->getCodeAnalFourn());
    }

    /**
     * Tests the setCodeCentre() method.
     *
     * @return void
     */
    public function testSetCodeCentre() {

        $obj = new ConstTabAnalAchat();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests the setCodeNature() method.
     *
     * @return void
     */
    public function testSetCodeNature() {

        $obj = new ConstTabAnalAchat();

        $obj->setCodeNature("codeNature");
        $this->assertEquals("codeNature", $obj->getCodeNature());
    }

}
