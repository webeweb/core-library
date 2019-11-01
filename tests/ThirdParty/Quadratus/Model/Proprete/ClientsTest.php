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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\Clients;

/**
 * Clients test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class ClientsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Clients();

        $this->assertNull($obj->getActif());
        $this->assertNull($obj->getBloque());
        $this->assertNull($obj->getCleAlpha());
        $this->assertNull($obj->getCodeAnalytique());
        $this->assertNull($obj->getCodeCategorieClient());
        $this->assertNull($obj->getCodeClientFact());
        $this->assertNull($obj->getCodeDepot());
        $this->assertNull($obj->getCodeDevise());
        $this->assertNull($obj->getCodeFamille());
        $this->assertNull($obj->getCodeGeo());
        $this->assertNull($obj->getCodeLangueDesignationArticle());
        $this->assertNull($obj->getCodeModeReglement());
        $this->assertNull($obj->getCodeOrigine());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getCodeRepresentant());
        $this->assertNull($obj->getCodeRevision());
        $this->assertNull($obj->getCodeSousFamille());
        $this->assertNull($obj->getCodeSousTournee());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getCodeTournee());
        $this->assertNull($obj->getCodeVentilCompta());
        $this->assertNull($obj->getCollectifComptable());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getDateCreat());
        $this->assertNull($obj->getDateEntree());
        $this->assertNull($obj->getDateModif());
        $this->assertNull($obj->getDateSortie());
        $this->assertNull($obj->getDerniereAnneeFacturee());
        $this->assertNull($obj->getDomiciliationBancaire1());
        $this->assertNull($obj->getDomiciliationBancaire2());
        $this->assertNull($obj->getEcheanceDepart());
        $this->assertNull($obj->getEcheanceLe());
        $this->assertNull($obj->getEcheanceNbJours());
        $this->assertNull($obj->getFactureEuros());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getNbBl());
        $this->assertNull($obj->getNbFacture());
        $this->assertNull($obj->getNombreEcheances());
        $this->assertNull($obj->getNumCptCollectif());
        $this->assertNull($obj->getNumCptComptable());
        $this->assertNull($obj->getPremiereAnneeFacturee());
        $this->assertNull($obj->getProspect());
        $this->assertNull($obj->getRib());
        $this->assertNull($obj->getRemiseLigne1());
        $this->assertNull($obj->getRemiseLigne2());
        $this->assertNull($obj->getRemiseLigne3());
        $this->assertNull($obj->getRemisePied1());
        $this->assertNull($obj->getRemisePied2());
        $this->assertNull($obj->getRemisePied3());
        $this->assertNull($obj->getSoumisEscompte());
        $this->assertNull($obj->getTauxEscompte());
        $this->assertNull($obj->getTransporteur());
        $this->assertNull($obj->getTypeFacture());
    }
}
