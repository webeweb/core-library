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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\CdeClientLigne;

/**
 * Cde client ligne test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class CdeClientLigneTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CdeClientLigne();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeDepot());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getCodeUnite());
        $this->assertNull($obj->getCodeVariante());
        $this->assertNull($obj->getCodeVentilVente());
        $this->assertNull($obj->getCommandeRecue());
        $this->assertNull($obj->getDateReceptionPrevue());
        $this->assertNull($obj->getDesignation());
        $this->assertNull($obj->getDesignation2());
        $this->assertNull($obj->getDesignation3());
        $this->assertNull($obj->getIndiceLigne());
        $this->assertNull($obj->getNoBl());
        $this->assertNull($obj->getNoLigneBl());
        $this->assertNull($obj->getNoPiece());
        $this->assertNull($obj->getNumeroFacture());
        $this->assertNull($obj->getNumeroLigne());
        $this->assertNull($obj->getPuBrut());
        $this->assertNull($obj->getPrixAchat());
        $this->assertNull($obj->getPrixbloque());
        $this->assertNull($obj->getQteOrigine());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getRemiseLigne1());
        $this->assertNull($obj->getRemiseLigne2());
        $this->assertNull($obj->getRemiseLigne3());
        $this->assertNull($obj->getTauxCommission());
        $this->assertNull($obj->getTauxTva());
        $this->assertNull($obj->getTypeLigne());
    }
}
