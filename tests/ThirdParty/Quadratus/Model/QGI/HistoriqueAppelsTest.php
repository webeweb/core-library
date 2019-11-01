<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\HistoriqueAppels;

/**
 * Historique appels test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class HistoriqueAppelsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new HistoriqueAppels();

        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateurClot());
        $this->assertNull($obj->getCodeCollaborateurDest());
        $this->assertNull($obj->getCodeCollaborateurEntrant());
        $this->assertNull($obj->getCodeProduit());
        $this->assertNull($obj->getConfidentiel());
        $this->assertNull($obj->getConsequence());
        $this->assertNull($obj->getDateEntree());
        $this->assertNull($obj->getDateSortie());
        $this->assertNull($obj->getEmailAuteur());
        $this->assertNull($obj->getGroupeQualifiant());
        $this->assertNull($obj->getIdHistorique());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getNature());
        $this->assertNull($obj->getNomClient());
        $this->assertNull($obj->getOrigine());
        $this->assertNull($obj->getPieceJointe());
        $this->assertNull($obj->getReponse());
        $this->assertNull($obj->getSpecial());
        $this->assertNull($obj->getTel());
        $this->assertNull($obj->getTypeMessage());
    }
}
