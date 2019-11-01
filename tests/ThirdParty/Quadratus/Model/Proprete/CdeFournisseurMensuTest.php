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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\CdeFournisseurMensu;

/**
 * Cde fournisseur mensu test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class CdeFournisseurMensuTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CdeFournisseurMensu();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeFournisseur());
        $this->assertNull($obj->getCodeInspecteur());
        $this->assertNull($obj->getCodeLivraison());
        $this->assertNull($obj->getCodeLivreur());
        $this->assertNull($obj->getCommandeIsolee());
        $this->assertNull($obj->getCritereTexte1());
        $this->assertNull($obj->getDateLivraison());
        $this->assertNull($obj->getDateTransfert());
        $this->assertNull($obj->getDesignation());
        $this->assertNull($obj->getDesignation2());
        $this->assertNull($obj->getDesignation3());
        $this->assertNull($obj->getFromCdeType());
        $this->assertNull($obj->getMajStockByDa());
        $this->assertNull($obj->getNoBonInt());
        $this->assertNull($obj->getNoPieceCde());
        $this->assertNull($obj->getNoPieceCdeCli());
        $this->assertNull($obj->getNumeroBsGenere());
        $this->assertNull($obj->getNumeroLigne());
        $this->assertNull($obj->getPuBrut());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPosteRent());
        $this->assertNull($obj->getPrixSaisi());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getQuantiteBs());
        $this->assertNull($obj->getQuantiteCde());
        $this->assertNull($obj->getQuantiteCdeCli());
        $this->assertNull($obj->getQuantiteLiv());
        $this->assertNull($obj->getRemise1());
        $this->assertNull($obj->getRemise2());
        $this->assertNull($obj->getRemise3());
        $this->assertNull($obj->getTypeGestion());
        $this->assertNull($obj->getTypePiece());
        $this->assertNull($obj->getUniqIdBlocage());
        $this->assertNull($obj->getValidee());
    }
}
