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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Fournisseurs;

/**
 * Fournisseurs test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class FournisseursTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Fournisseurs();

        $this->assertNull($obj->getAdresseSiteFournisseur());
        $this->assertNull($obj->getArticlePort1());
        $this->assertNull($obj->getArticlePort2());
        $this->assertNull($obj->getBloque());
        $this->assertNull($obj->getChiffreAffaire());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeActivite());
        $this->assertNull($obj->getCodeAssistantJuridique());
        $this->assertNull($obj->getCodeAssistantSocial());
        $this->assertNull($obj->getCodeAutre1());
        $this->assertNull($obj->getCodeAutre2());
        $this->assertNull($obj->getCodeAvocat());
        $this->assertNull($obj->getCodeBarre());
        $this->assertNull($obj->getCodeCategorieFournisseur());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeDepot());
        $this->assertNull($obj->getCodeDevise());
        $this->assertNull($obj->getCodeEditionFact());
        $this->assertNull($obj->getCodeExc());
        $this->assertNull($obj->getCodeExpert());
        $this->assertNull($obj->getCodeFamille());
        $this->assertNull($obj->getCodeGeo());
        $this->assertNull($obj->getCodeImputationAnalytique());
        $this->assertNull($obj->getCodeLangueDesignationArticle());
        $this->assertNull($obj->getCodeOrigine());
        $this->assertNull($obj->getCodePortefeuille());
        $this->assertNull($obj->getCodeReglement());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getCodeSousFamille());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getCodeTransporteur());
        $this->assertNull($obj->getCodeVentilCompta());
        $this->assertNull($obj->getCollectif());
        $this->assertNull($obj->getCompteDeVente());
        $this->assertNull($obj->getDsCodeCollab());
        $this->assertNull($obj->getDsDateRetour());
        $this->assertNull($obj->getDsDateSortie());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateEntree());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getDateSortie());
        $this->assertNull($obj->getDelai());
        $this->assertNull($obj->getDomiciliationBancaire1());
        $this->assertNull($obj->getDomiciliationBancaire2());
        $this->assertNull($obj->getDossierComptable());
        $this->assertNull($obj->getDossierPaie());
        $this->assertNull($obj->getEanFrn());
        $this->assertNull($obj->getEcheanceFinDecade());
        $this->assertNull($obj->getEcheanceFinQuinzaine());
        $this->assertNull($obj->getEtat1());
        $this->assertNull($obj->getEtat2());
        $this->assertNull($obj->getEtat3());
        $this->assertNull($obj->getEtat4());
        $this->assertNull($obj->getEtat5());
        $this->assertNull($obj->getEtiquettes());
        $this->assertNull($obj->getFactureEuros());
        $this->assertNull($obj->getFactureIsolee());
        $this->assertNull($obj->getFraisFixes1());
        $this->assertNull($obj->getFraisFixes2());
        $this->assertNull($obj->getFrancoPort1());
        $this->assertNull($obj->getFrancoPort2());
        $this->assertNull($obj->getIgp());
        $this->assertNull($obj->getIdentifiantTva());
        $this->assertNull($obj->getInsp());
        $this->assertNull($obj->getMissionSurDossier());
        $this->assertNull($obj->getModeleBr());
        $this->assertNull($obj->getModeleCommande());
        $this->assertNull($obj->getModeleFacture());
        $this->assertNull($obj->getModeleReleve());
        $this->assertNull($obj->getMontantFranco());
        $this->assertNull($obj->getMontantMiniCde());
        $this->assertNull($obj->getMontantPortLiv());
        $this->assertNull($obj->getNbBr());
        $this->assertNull($obj->getNbCommande());
        $this->assertNull($obj->getNbFacture());
        $this->assertNull($obj->getNbJourInterval());
        $this->assertNull($obj->getNbMaxBr());
        $this->assertNull($obj->getNbReleve());
        $this->assertNull($obj->getNombreEcheances());
        $this->assertNull($obj->getNumFactureF());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getObservation1());
        $this->assertNull($obj->getObservation2());
        $this->assertNull($obj->getPaiementDepartLe());
        $this->assertNull($obj->getPaiementLe());
        $this->assertNull($obj->getPaiementNombreDeJours());
        $this->assertNull($obj->getPrefixeFactureF());
        $this->assertNull($obj->getRib());
        $this->assertNull($obj->getRegime());
        $this->assertNull($obj->getRegroupementFact());
        $this->assertNull($obj->getReleveFacture());
        $this->assertNull($obj->getRemiseLigne1());
        $this->assertNull($obj->getRemiseLigne2());
        $this->assertNull($obj->getRemiseLigne3());
        $this->assertNull($obj->getRemisePied());
        $this->assertNull($obj->getRemisePied2());
        $this->assertNull($obj->getRemisePied3());
        $this->assertNull($obj->getResultat());
        $this->assertNull($obj->getSiegeGroupe());
        $this->assertNull($obj->getSoumisEscompte());
        $this->assertNull($obj->getSoumisPort1());
        $this->assertNull($obj->getSoumisPort2());
        $this->assertNull($obj->getSoumisTva());
        $this->assertNull($obj->getSoumisTaxe1());
        $this->assertNull($obj->getSoumisTaxe2());
        $this->assertNull($obj->getSoumisTaxe3());
        $this->assertNull($obj->getSoumisTaxe4());
        $this->assertNull($obj->getSoumisTaxe5());
        $this->assertNull($obj->getTrsAffGrp());
        $this->assertNull($obj->getTrsAffMatDang());
        $this->assertNull($obj->getTrsAffProdChim());
        $this->assertNull($obj->getTrsAffRefri());
        $this->assertNull($obj->getTrsCodeTarif());
        $this->assertNull($obj->getTrsEstUnAffrete());
        $this->assertNull($obj->getTrsGestionPalettes());
        $this->assertNull($obj->getTrspCentPxTrs());
        $this->assertNull($obj->getTrsSuiviPlaningAff());
        $this->assertNull($obj->getTvaRegime());
        $this->assertNull($obj->getTauxComm());
        $this->assertNull($obj->getTauxEscompte());
        $this->assertNull($obj->getToutesActivites());
        $this->assertNull($obj->getTransporteur());
        $this->assertNull($obj->getTypeEditBr());
        $this->assertNull($obj->getTypeFournisseur());
    }
}
