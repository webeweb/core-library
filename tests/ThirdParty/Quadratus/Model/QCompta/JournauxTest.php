<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Journaux;

/**
 * Journaux test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class JournauxTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Journaux();

        $this->assertNull($obj->getBic());
        $this->assertNull($obj->getCentraliseGdLivre());
        $this->assertNull($obj->getCleAcces());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getCodeEntree());
        $this->assertNull($obj->getCompteContrepartie());
        $this->assertNull($obj->getCompteContrepartieAamm());
        $this->assertNull($obj->getContrepartie());
        $this->assertNull($obj->getDomBanque());
        $this->assertNull($obj->getEquilibreAuto());
        $this->assertNull($obj->getEtebacSkipTva());
        $this->assertNull($obj->getEtebacXFerDetaillerBq());
        $this->assertNull($obj->getEtebacXFerDoPrefixCodeOp());
        $this->assertNull($obj->getEtebacXFerIndLibelle());
        $this->assertNull($obj->getEtebacXFerLignesComp());
        $this->assertNull($obj->getFamille());
        $this->assertNull($obj->getGestNumPieceJrn());
        $this->assertNull($obj->getGestionFolio());
        $this->assertNull($obj->getGestionNumPiece());
        $this->assertNull($obj->getIban());
        $this->assertNull($obj->getIbanIdClient());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMontantNegatif());
        $this->assertNull($obj->getNiveauDroit());
        $this->assertNull($obj->getNumEmetteur());
        $this->assertNull($obj->getProchainNumPiece());
        $this->assertNull($obj->getPropoLibelle());
        $this->assertNull($obj->getRib());
        $this->assertNull($obj->getSaisieBordereau());
        $this->assertNull($obj->getTypeJournal());
        $this->assertNull($obj->getTypePieceGlobal());
    }
}
