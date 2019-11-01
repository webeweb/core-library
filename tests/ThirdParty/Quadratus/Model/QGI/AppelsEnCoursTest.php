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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\AppelsEnCours;

/**
 * Appels en cours test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class AppelsEnCoursTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AppelsEnCours();

        $this->assertNull($obj->getAvecMiseEnSomm());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateurDest());
        $this->assertNull($obj->getCodeCollaborateurEntrant());
        $this->assertNull($obj->getCodeCollaborateurRedir());
        $this->assertNull($obj->getCodeProduit());
        $this->assertNull($obj->getCompteurTemps());
        $this->assertNull($obj->getConfidentiel());
        $this->assertNull($obj->getConsequence());
        $this->assertNull($obj->getDateCreationClient());
        $this->assertNull($obj->getDateEntree());
        $this->assertNull($obj->getDateMessageLu());
        $this->assertNull($obj->getDateRedir());
        $this->assertNull($obj->getDemandeAr());
        $this->assertNull($obj->getDestinatairesA());
        $this->assertNull($obj->getDestinatairesCc());
        $this->assertNull($obj->getEmailAuteur());
        $this->assertNull($obj->getGroupeQualifiant());
        $this->assertNull($obj->getIdAppel());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getMessageLu());
        $this->assertNull($obj->getMiseEnSommDateHeure());
        $this->assertNull($obj->getNature());
        $this->assertNull($obj->getNbAppelsEnCours());
        $this->assertNull($obj->getNomClient());
        $this->assertNull($obj->getOrigine());
        $this->assertNull($obj->getPieceJointe());
        $this->assertNull($obj->getReponse());
        $this->assertNull($obj->getSousRepRefGuid());
        $this->assertNull($obj->getSpecial());
        $this->assertNull($obj->getTel());
        $this->assertNull($obj->getTypeMessage());
        $this->assertNull($obj->getUniqId());
        $this->assertNull($obj->getUrgent());
    }
}
