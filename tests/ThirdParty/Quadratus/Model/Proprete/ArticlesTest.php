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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\Articles;

/**
 * Articles test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class ArticlesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Articles();

        $this->assertNull($obj->getActif());
        $this->assertNull($obj->getArticleRemplacement());
        $this->assertNull($obj->getClassificationFour());
        $this->assertNull($obj->getClassificationUtil());
        $this->assertNull($obj->getCodeAffectRent());
        $this->assertNull($obj->getCodeAnalAchat());
        $this->assertNull($obj->getCodeAnalVente());
        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeFournisseur());
        $this->assertNull($obj->getCodeTvaAchat());
        $this->assertNull($obj->getCodeTvaVente());
        $this->assertNull($obj->getCodeUnite());
        $this->assertNull($obj->getCodeVentilAchat());
        $this->assertNull($obj->getCodeVentilVente());
        $this->assertNull($obj->getCoef());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getDepuisDebFac());
        $this->assertNull($obj->getDernierPrixAchat());
        $this->assertNull($obj->getDesignation());
        $this->assertNull($obj->getDesignation2());
        $this->assertNull($obj->getDesignation3());
        $this->assertNull($obj->getDesignationRtf());
        $this->assertNull($obj->getFamilleArticle());
        $this->assertNull($obj->getImprimerDansPied());
        $this->assertNull($obj->getMontantUnitaireTaxe());
        $this->assertNull($obj->getMotCleDansPied());
        $this->assertNull($obj->getNePasReviser());
        $this->assertNull($obj->getNombreEcheances());
        $this->assertNull($obj->getNumeroPj());
        $this->assertNull($obj->getPamp());
        $this->assertNull($obj->getPosteRent());
        $this->assertNull($obj->getPrixNet());
        $this->assertNull($obj->getPrixRevient());
        $this->assertNull($obj->getPrixVente());
        $this->assertNull($obj->getPrixVenteEuros());
        $this->assertNull($obj->getProduit());
        $this->assertNull($obj->getProduitChimique());
        $this->assertNull($obj->getPxFacture());
        $this->assertNull($obj->getQteStockMini());
        $this->assertNull($obj->getQteStockReel());
        $this->assertNull($obj->getSoumisEscompte());
        $this->assertNull($obj->getSuiviStock());
        $this->assertNull($obj->getTauxEscompte());
        $this->assertNull($obj->getTypeArticle());
        $this->assertNull($obj->getVariante());
        $this->assertNull($obj->getVentilMarge());
        $this->assertNull($obj->getVisuDansAttFisc());
    }
}
