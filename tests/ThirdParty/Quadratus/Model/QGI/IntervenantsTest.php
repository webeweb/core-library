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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Intervenants;

/**
 * Intervenants test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class IntervenantsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Intervenants();

        $this->assertNull($obj->getAdresseSiteClient());
        $this->assertNull($obj->getAdresseTranspac());
        $this->assertNull($obj->getAge());
        $this->assertNull($obj->getAutoriserAccesInternet());
        $this->assertNull($obj->getBic());
        $this->assertNull($obj->getBtq());
        $this->assertNull($obj->getBtq2());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getBureauDistributeur2());
        $this->assertNull($obj->getCapital());
        $this->assertNull($obj->getCapitalMonnaie());
        $this->assertNull($obj->getCategorieJuridique());
        $this->assertNull($obj->getCivilite());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeEpoux());
        $this->assertNull($obj->getCodeInsee());
        $this->assertNull($obj->getCodeNaf());
        $this->assertNull($obj->getCodeNaf2008());
        $this->assertNull($obj->getCodeOfficielCommune());
        $this->assertNull($obj->getCodeOfficielCommune2());
        $this->assertNull($obj->getCodePaysIso());
        $this->assertNull($obj->getCodePaysIsoNaiss());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getCodePostal2());
        $this->assertNull($obj->getCodePostalMariage());
        $this->assertNull($obj->getCodePostalNaissance());
        $this->assertNull($obj->getCodePostalRc());
        $this->assertNull($obj->getCodePostalRm());
        $this->assertNull($obj->getCodeResponsable());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getComplement2());
        $this->assertNull($obj->getComplementSuite());
        $this->assertNull($obj->getCompteurLiens());
        $this->assertNull($obj->getContact());
        $this->assertNull($obj->getCreationSociete());
        $this->assertNull($obj->getDateCreat());
        $this->assertNull($obj->getDateDebActivite());
        $this->assertNull($obj->getDateDivorce());
        $this->assertNull($obj->getDateInstallation());
        $this->assertNull($obj->getDateMariage());
        $this->assertNull($obj->getDateModif());
        $this->assertNull($obj->getDateNaissance());
        $this->assertNull($obj->getDonneesAppel());
        $this->assertNull($obj->getDroitCollabVisuDocuments());
        $this->assertNull($obj->getDureeSociete());
        $this->assertNull($obj->getEmail());
        $this->assertNull($obj->getEmail2());
        $this->assertNull($obj->getEnseigne());
        $this->assertNull($obj->getFrpCle());
        $this->assertNull($obj->getFrpDossier());
        $this->assertNull($obj->getFrpRecette());
        $this->assertNull($obj->getFax());
        $this->assertNull($obj->getFax2());
        $this->assertNull($obj->getGestJuri());
        $this->assertNull($obj->getIban());
        $this->assertNull($obj->getIdentTva());
        $this->assertNull($obj->getIdentifiant());
        $this->assertNull($obj->getIdentifiantInternet());
        $this->assertNull($obj->getInscriptionRc());
        $this->assertNull($obj->getInscriptionRm());
        $this->assertNull($obj->getIsClient());
        $this->assertNull($obj->getIsFournisseur());
        $this->assertNull($obj->getMdpInternet());
        $this->assertNull($obj->getMissionPrincipale());
        $this->assertNull($obj->getNie1());
        $this->assertNull($obj->getNie2());
        $this->assertNull($obj->getNir());
        $this->assertNull($obj->getNationalite());
        $this->assertNull($obj->getNbEnfants());
        $this->assertNull($obj->getNbKm());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getNomMarital());
        $this->assertNull($obj->getNomMere());
        $this->assertNull($obj->getNomPere());
        $this->assertNull($obj->getNomSuite());
        $this->assertNull($obj->getNomVille());
        $this->assertNull($obj->getNomVille2());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNomVoie2());
        $this->assertNull($obj->getNombreActions());
        $this->assertNull($obj->getNumAgrementCga());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getNumVoie2());
        $this->assertNull($obj->getPays());
        $this->assertNull($obj->getPaysNaissance());
        $this->assertNull($obj->getPersonnePhysique());
        $this->assertNull($obj->getPortable1());
        $this->assertNull($obj->getPortable12());
        $this->assertNull($obj->getPortable2());
        $this->assertNull($obj->getPortable22());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getQualite());
        $this->assertNull($obj->getRc());
        $this->assertNull($obj->getRcCode());
        $this->assertNull($obj->getRib());
        $this->assertNull($obj->getRm());
        $this->assertNull($obj->getRmCode());
        $this->assertNull($obj->getRegimeMatrimonial());
        $this->assertNull($obj->getRegimeMatrimoniale());
        $this->assertNull($obj->getSalarieIndependant());
        $this->assertNull($obj->getSiret());
        $this->assertNull($obj->getSituationFam());
        $this->assertNull($obj->getTel1());
        $this->assertNull($obj->getTel12());
        $this->assertNull($obj->getTel2());
        $this->assertNull($obj->getTel22());
        $this->assertNull($obj->getTelVoiture());
        $this->assertNull($obj->getTelVoiture2());
        $this->assertNull($obj->getTelex());
        $this->assertNull($obj->getTelex2());
        $this->assertNull($obj->getTravailADomicile());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getTypeSociete());
        $this->assertNull($obj->getVilleMariage());
        $this->assertNull($obj->getVilleNaissance());
        $this->assertNull($obj->getVilleRc());
        $this->assertNull($obj->getVilleRm());
        $this->assertNull($obj->getZipCode());
    }
}
