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

use WBW\Library\Core\Quadratus\Model\Proprete\ArticlesRisques;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Articles risques model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class ArticlesRisquesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ArticlesRisques();

        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeRisque());
    }

    /**
     * Tests the setCodeArticle() method.
     *
     * @return void
     */
    public function testSetCodeArticle() {

        $obj = new ArticlesRisques();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests the setCodeRisque() method.
     *
     * @return void
     */
    public function testSetCodeRisque() {

        $obj = new ArticlesRisques();

        $obj->setCodeRisque("codeRisque");
        $this->assertEquals("codeRisque", $obj->getCodeRisque());
    }

}
