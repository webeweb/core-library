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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\AccesWeb;

/**
 * Acces web test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class AccesWebTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AccesWeb();

        $this->assertNull($obj->getAccesAgenda());
        $this->assertNull($obj->getAccesArticles());
        $this->assertNull($obj->getAccesArticlesConsommes());
        $this->assertNull($obj->getAccesClients());
        $this->assertNull($obj->getAccesClientsFavoris());
        $this->assertNull($obj->getAccesConsultation());
        $this->assertNull($obj->getAccesDossierCabinet());
        $this->assertNull($obj->getAccesFacture());
        $this->assertNull($obj->getAccesIBureau());
        $this->assertNull($obj->getAccesInterventions());
        $this->assertNull($obj->getAccesListeCollab());
        $this->assertNull($obj->getAccesMessages());
        $this->assertNull($obj->getAccesNoteFrais());
        $this->assertNull($obj->getAccesRepertoire());
        $this->assertNull($obj->getAccesSaisieCommande());
        $this->assertNull($obj->getAccesSaisieTp());
        $this->assertNull($obj->getAccesSoldeCpta());
        $this->assertNull($obj->getAccesTableauxBord());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getDateActivation());
        $this->assertNull($obj->getDateFin());
        $this->assertNull($obj->getDernTentative());
        $this->assertNull($obj->getDossCpta());
        $this->assertNull($obj->getDossPaie());
        $this->assertNull($obj->getDossProp());
        $this->assertNull($obj->getDupliqueIntervention());
        $this->assertNull($obj->getMemeMdpQueIBureau());
        $this->assertNull($obj->getMotDePasse());
        $this->assertNull($obj->getRestrCliAssist1());
        $this->assertNull($obj->getRestrCliAssist2());
        $this->assertNull($obj->getRestrCliAutre1());
        $this->assertNull($obj->getRestrCliAutre2());
        $this->assertNull($obj->getRestrCliCollab());
        $this->assertNull($obj->getRestrCliDebut());
        $this->assertNull($obj->getRestrCliExpert());
        $this->assertNull($obj->getRestrCliFin());
        $this->assertNull($obj->getRestrCliPortef());
        $this->assertNull($obj->getTentatives());
        $this->assertNull($obj->getiKey());
    }
}
