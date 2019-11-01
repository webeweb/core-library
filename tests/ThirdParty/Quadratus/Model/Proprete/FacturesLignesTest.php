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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\FacturesLignes;

/**
 * Factures lignes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class FacturesLignesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new FacturesLignes();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeAffaireLigne());
        $this->assertNull($obj->getCodeAnalArticle());
        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeChantierLigne());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getCodeTvaArticle());
        $this->assertNull($obj->getCodeUnite());
        $this->assertNull($obj->getCodeVentilArticle());
        $this->assertNull($obj->getCoefficientBt());
        $this->assertNull($obj->getDateBt());
        $this->assertNull($obj->getDatePreparation());
        $this->assertNull($obj->getDepuisDebFac());
        $this->assertNull($obj->getDesignation());
        $this->assertNull($obj->getDesignation2());
        $this->assertNull($obj->getDesignation3());
        $this->assertNull($obj->getDesignationBis());
        $this->assertNull($obj->getDesignationBis2());
        $this->assertNull($obj->getDesignationBis3());
        $this->assertNull($obj->getDesignationRtf());
        $this->assertNull($obj->getDureeBt());
        $this->assertNull($obj->getFromPointageBt());
        $this->assertNull($obj->getHeuresPrev());
        $this->assertNull($obj->getHeuresReel());
        $this->assertNull($obj->getImprimerDansPied());
        $this->assertNull($obj->getMontantUnitaireTaxe());
        $this->assertNull($obj->getMotCleDansPied());
        $this->assertNull($obj->getNoChronoPreparation());
        $this->assertNull($obj->getNoLigneOri());
        $this->assertNull($obj->getNoPieceOrigine());
        $this->assertNull($obj->getNumeroBt());
        $this->assertNull($obj->getNumeroFacture());
        $this->assertNull($obj->getNumeroLigne());
        $this->assertNull($obj->getPeriodePreparation());
        $this->assertNull($obj->getPeriodeVentilMarge());
        $this->assertNull($obj->getPosteRent());
        $this->assertNull($obj->getPrixAchat());
        $this->assertNull($obj->getPrixAchatBt());
        $this->assertNull($obj->getPrixUnitaire());
        $this->assertNull($obj->getPrixUnitairePdf());
        $this->assertNull($obj->getPxFacture());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getRefPosteCdeWebFt());
        $this->assertNull($obj->getRemiseLigne1());
        $this->assertNull($obj->getRemiseLigne2());
        $this->assertNull($obj->getRemiseLigne3());
        $this->assertNull($obj->getTauxHoraireBt());
        $this->assertNull($obj->getTauxTvaArticle());
        $this->assertNull($obj->getTauxTvaTaxe());
        $this->assertNull($obj->getTypePiece());
        $this->assertNull($obj->getVentilMarge());
    }
}
