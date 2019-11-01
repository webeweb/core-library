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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\MouvementsStock;

/**
 * Mouvements stock test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class MouvementsStockTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new MouvementsStock();

        $this->assertNull($obj->getBonSortie());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeDepot());
        $this->assertNull($obj->getCodeDevise());
        $this->assertNull($obj->getCodeFournisseur());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getCodeVariante());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getEuro());
        $this->assertNull($obj->getIndex());
        $this->assertNull($obj->getMouvementGenere());
        $this->assertNull($obj->getPosteRent());
        $this->assertNull($obj->getPrixU());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getQuantiteVoulue());
        $this->assertNull($obj->getRemiseLigne1());
        $this->assertNull($obj->getRemiseLigne2());
        $this->assertNull($obj->getRemiseLigne3());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getTypeGestion());
        $this->assertNull($obj->getTypeLigne());
    }
}
