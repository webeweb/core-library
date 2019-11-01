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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\ArticlesFrn;

/**
 * Articles frn test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class ArticlesFrnTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ArticlesFrn();

        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeFournisseur());
        $this->assertNull($obj->getCommentaires());
        $this->assertNull($obj->getConditionnement());
        $this->assertNull($obj->getDelaiLe());
        $this->assertNull($obj->getDelaiLocal());
        $this->assertNull($obj->getDelaiNombre());
        $this->assertNull($obj->getDelaiType());
        $this->assertNull($obj->getRefArticleFournisseur());
    }
}
