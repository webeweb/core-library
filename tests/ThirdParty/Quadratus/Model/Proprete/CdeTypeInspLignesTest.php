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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\CdeTypeInspLignes;

/**
 * Cde type insp lignes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class CdeTypeInspLignesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CdeTypeInspLignes();

        $this->assertNull($obj->getAou());
        $this->assertNull($obj->getAvr());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeFournisseur());
        $this->assertNull($obj->getCodeInspecteur());
        $this->assertNull($obj->getCodeLivraison());
        $this->assertNull($obj->getCommandeIsolee());
        $this->assertNull($obj->getDateDebutValidite());
        $this->assertNull($obj->getDateFinValidite());
        $this->assertNull($obj->getDateValidee());
        $this->assertNull($obj->getDec());
        $this->assertNull($obj->getDesignation1());
        $this->assertNull($obj->getDesignation2());
        $this->assertNull($obj->getDesignation3());
        $this->assertNull($obj->getFev());
        $this->assertNull($obj->getJan());
        $this->assertNull($obj->getJourLivraison());
        $this->assertNull($obj->getJuil());
        $this->assertNull($obj->getJuin());
        $this->assertNull($obj->getMai());
        $this->assertNull($obj->getMajStockByDa());
        $this->assertNull($obj->getMar());
        $this->assertNull($obj->getNov());
        $this->assertNull($obj->getNumeroLigne());
        $this->assertNull($obj->getOct());
        $this->assertNull($obj->getPosteRent());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getSaisirModaliteLiv());
        $this->assertNull($obj->getSep());
        $this->assertNull($obj->getTypeGestion());
        $this->assertNull($obj->getValidee());
    }
}
