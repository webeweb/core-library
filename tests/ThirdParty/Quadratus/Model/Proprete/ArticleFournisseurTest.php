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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\ArticleFournisseur;

/**
 * Article fournisseur test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class ArticleFournisseurTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ArticleFournisseur();

        $this->assertNull($obj->getAvtDerCodeDevise());
        $this->assertNull($obj->getAvtDerDateAchat());
        $this->assertNull($obj->getAvtDerEuros());
        $this->assertNull($obj->getAvtDerPxAchat());
        $this->assertNull($obj->getAvtDerQteAchat());
        $this->assertNull($obj->getAvtDerRemise1());
        $this->assertNull($obj->getAvtDerRemise2());
        $this->assertNull($obj->getAvtDerRemise3());
        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeFournisseur());
        $this->assertNull($obj->getCommentaires());
        $this->assertNull($obj->getConditionnement());
        $this->assertNull($obj->getDelaiLe());
        $this->assertNull($obj->getDelaiNombre());
        $this->assertNull($obj->getDelaiType());
        $this->assertNull($obj->getDerCodeDevise());
        $this->assertNull($obj->getDerDateAchat());
        $this->assertNull($obj->getDerEuros());
        $this->assertNull($obj->getDerPxAchat());
        $this->assertNull($obj->getDerQteAchat());
        $this->assertNull($obj->getDerRemise1());
        $this->assertNull($obj->getDerRemise2());
        $this->assertNull($obj->getDerRemise3());
        $this->assertNull($obj->getMiniCodeDevise());
        $this->assertNull($obj->getMiniDateAchat());
        $this->assertNull($obj->getMiniEuros());
        $this->assertNull($obj->getMiniPxAchat());
        $this->assertNull($obj->getMiniQteAchat());
        $this->assertNull($obj->getMiniRemise1());
        $this->assertNull($obj->getMiniRemise2());
        $this->assertNull($obj->getMiniRemise3());
        $this->assertNull($obj->getNumeroLigne());
        $this->assertNull($obj->getQteEconomique());
        $this->assertNull($obj->getRefArticleFournisseur());
    }
}
