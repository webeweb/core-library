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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\ArticlesFrnPrixA;

/**
 * Articles frn prix a test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class ArticlesFrnPrixATest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ArticlesFrnPrixA();

        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeFournisseur());
        $this->assertNull($obj->getDateDebut());
        $this->assertNull($obj->getPrixCond());
        $this->assertNull($obj->getPxAchat());
        $this->assertNull($obj->getQteAchat());
        $this->assertNull($obj->getQteCond());
        $this->assertNull($obj->getRemise1());
        $this->assertNull($obj->getRemise2());
        $this->assertNull($obj->getRemise3());
    }
}
