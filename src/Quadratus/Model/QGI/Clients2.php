<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QGI;

use DateTime;

/**
 * Clients2 model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class Clients2 {

	/**
	 * Allotissement.
	 *
	 * @var boolean
	 */
	private $allotissement;

	/**
	 * B l mail.
	 *
	 * @var boolean
	 */
	private $bLMail;

	/**
	 * Cdes mail.
	 *
	 * @var boolean
	 */
	private $cdesMail;

	/**
	 * Code activite c g a.
	 *
	 * @var string
	 */
	private $codeActiviteCGA;

	/**
	 * Code client.
	 *
	 * @var string
	 */
	private $codeClient;

	/**
	 * Code transporteur1.
	 *
	 * @var string
	 */
	private $codeTransporteur1;

	/**
	 * Code transporteur2.
	 *
	 * @var string
	 */
	private $codeTransporteur2;

	/**
	 * Code transporteur3.
	 *
	 * @var string
	 */
	private $codeTransporteur3;

	/**
	 * Code transporteur4.
	 *
	 * @var string
	 */
	private $codeTransporteur4;

	/**
	 * Code transporteur5.
	 *
	 * @var string
	 */
	private $codeTransporteur5;

	/**
	 * Date deb exe publication.
	 *
	 * @var DateTime
	 */
	private $dateDebExePublication;

	/**
	 * Delai livraison.
	 *
	 * @var int
	 */
	private $delaiLivraison;

	/**
	 * Devis mail.
	 *
	 * @var boolean
	 */
	private $devisMail;

	/**
	 * E a n client.
	 *
	 * @var string
	 */
	private $eANClient;

	/**
	 * E a n facture papier.
	 *
	 * @var string
	 */
	private $eANFacturePapier;

	/**
	 * E a n plateforme.
	 *
	 * @var string
	 */
	private $eANPlateforme;

	/**
	 * E d i_ export_ b l.
	 *
	 * @var boolean
	 */
	private $eDI_Export_BL;

	/**
	 * E d i_ export_ fac.
	 *
	 * @var boolean
	 */
	private $eDI_Export_Fac;

	/**
	 * Echeance fin decade.
	 *
	 * @var boolean
	 */
	private $echeanceFinDecade;

	/**
	 * Echeance fin quinzaine.
	 *
	 * @var boolean
	 */
	private $echeanceFinQuinzaine;

	/**
	 * Fact_ complement suite.
	 *
	 * @var string
	 */
	private $fact_ComplementSuite;

	/**
	 * Fact_ zip code.
	 *
	 * @var string
	 */
	private $fact_ZipCode;

	/**
	 * Ind mail publication.
	 *
	 * @var int
	 */
	private $indMailPublication;

	/**
	 * Indice b l mail.
	 *
	 * @var int
	 */
	private $indiceBLMail;

	/**
	 * Indice cdes mail.
	 *
	 * @var int
	 */
	private $indiceCdesMail;

	/**
	 * Indice devis mail.
	 *
	 * @var int
	 */
	private $indiceDevisMail;

	/**
	 * Indice releves mail.
	 *
	 * @var int
	 */
	private $indiceRelevesMail;

	/**
	 * Lettre de mission_ date signature.
	 *
	 * @var DateTime
	 */
	private $lettreDeMission_DateSignature;

	/**
	 * Modele facture manuelle spe.
	 *
	 * @var string
	 */
	private $modeleFactureManuelleSpe;

	/**
	 * Montant depassement autorise.
	 *
	 * @var float
	 */
	private $montantDepassementAutorise;

	/**
	 * Motif entree.
	 *
	 * @var string
	 */
	private $motifEntree;

	/**
	 * Motif sortie.
	 *
	 * @var string
	 */
	private $motifSortie;

	/**
	 * Mt transport1.
	 *
	 * @var float
	 */
	private $mtTransport1;

	/**
	 * Mt transport2.
	 *
	 * @var float
	 */
	private $mtTransport2;

	/**
	 * Mt transport3.
	 *
	 * @var float
	 */
	private $mtTransport3;

	/**
	 * Mt transport4.
	 *
	 * @var float
	 */
	private $mtTransport4;

	/**
	 * Mt transport5.
	 *
	 * @var float
	 */
	private $mtTransport5;

	/**
	 * Non concerne i s.
	 *
	 * @var boolean
	 */
	private $nonConcerneIS;

	/**
	 * Non concerne t p.
	 *
	 * @var boolean
	 */
	private $nonConcerneTP;

	/**
	 * Non facturable.
	 *
	 * @var boolean
	 */
	private $nonFacturable;

	/**
	 * P m e tarif ou rem spe.
	 *
	 * @var boolean
	 */
	private $pMETarifOuRemSpe;

	/**
	 * Prevenir mail publier.
	 *
	 * @var boolean
	 */
	private $prevenirMailPublier;

	/**
	 * Releves mail.
	 *
	 * @var boolean
	 */
	private $relevesMail;

	/**
	 * Social_ complement suite.
	 *
	 * @var string
	 */
	private $social_ComplementSuite;

	/**
	 * Social_ zip code.
	 *
	 * @var string
	 */
	private $social_ZipCode;

	/**
	 * T r s art pied.
	 *
	 * @var string
	 */
	private $tRSArtPied;

	/**
	 * T r s art pied2.
	 *
	 * @var string
	 */
	private $tRSArtPied2;

	/**
	 * T r s categ march.
	 *
	 * @var string
	 */
	private $tRSCategMarch;

	/**
	 * T r s centre ana.
	 *
	 * @var string
	 */
	private $tRSCentreAna;

	/**
	 * T r s code tarif1.
	 *
	 * @var string
	 */
	private $tRSCodeTarif1;

	/**
	 * T r s code tarif1 sens.
	 *
	 * @var string
	 */
	private $tRSCodeTarif1Sens;

	/**
	 * T r s code tarif2.
	 *
	 * @var string
	 */
	private $tRSCodeTarif2;

	/**
	 * T r s code tarif2 sens.
	 *
	 * @var string
	 */
	private $tRSCodeTarif2Sens;

	/**
	 * T r s code tarif3.
	 *
	 * @var string
	 */
	private $tRSCodeTarif3;

	/**
	 * T r s code tarif3 sens.
	 *
	 * @var string
	 */
	private $tRSCodeTarif3Sens;

	/**
	 * T r s code tarif4.
	 *
	 * @var string
	 */
	private $tRSCodeTarif4;

	/**
	 * T r s code tarif4 sens.
	 *
	 * @var string
	 */
	private $tRSCodeTarif4Sens;

	/**
	 * T r s code tarif5.
	 *
	 * @var string
	 */
	private $tRSCodeTarif5;

	/**
	 * T r s code tarif5 sens.
	 *
	 * @var string
	 */
	private $tRSCodeTarif5Sens;

	/**
	 * T r s code tarif6.
	 *
	 * @var string
	 */
	private $tRSCodeTarif6;

	/**
	 * T r s code tarif6 sens.
	 *
	 * @var string
	 */
	private $tRSCodeTarif6Sens;

	/**
	 * T r s code tarif def.
	 *
	 * @var int
	 */
	private $tRSCodeTarifDef;

	/**
	 * T r s comment1.
	 *
	 * @var string
	 */
	private $tRSComment1;

	/**
	 * T r s comment2.
	 *
	 * @var string
	 */
	private $tRSComment2;

	/**
	 * T r s comment3.
	 *
	 * @var string
	 */
	private $tRSComment3;

	/**
	 * T r s comment4.
	 *
	 * @var string
	 */
	private $tRSComment4;

	/**
	 * T r s comment5.
	 *
	 * @var string
	 */
	private $tRSComment5;

	/**
	 * T r s comment6.
	 *
	 * @var string
	 */
	private $tRSComment6;

	/**
	 * T r s comment7.
	 *
	 * @var string
	 */
	private $tRSComment7;

	/**
	 * T r s comment8.
	 *
	 * @var string
	 */
	private $tRSComment8;

	/**
	 * T r s comment9.
	 *
	 * @var string
	 */
	private $tRSComment9;

	/**
	 * T r s consignes1.
	 *
	 * @var string
	 */
	private $tRSConsignes1;

	/**
	 * T r s consignes2.
	 *
	 * @var string
	 */
	private $tRSConsignes2;

	/**
	 * T r s consignes3.
	 *
	 * @var string
	 */
	private $tRSConsignes3;

	/**
	 * T r s gestion palettes.
	 *
	 * @var boolean
	 */
	private $tRSGestionPalettes;

	/**
	 * T r s marchandise sensible.
	 *
	 * @var boolean
	 */
	private $tRSMarchandiseSensible;

	/**
	 * T r s modele facture spe.
	 *
	 * @var string
	 */
	private $tRSModeleFactureSpe;

	/**
	 * T r s poids mini pal.
	 *
	 * @var float
	 */
	private $tRSPoidsMiniPal;

	/**
	 * T r s port du auto.
	 *
	 * @var boolean
	 */
	private $tRSPortDuAuto;

	/**
	 * T r s suivi c a mens.
	 *
	 * @var boolean
	 */
	private $tRSSuiviCAMens;

	/**
	 * T r s suivi dt enl.
	 *
	 * @var boolean
	 */
	private $tRSSuiviDtEnl;

	/**
	 * T r s suivi dt liv.
	 *
	 * @var boolean
	 */
	private $tRSSuiviDtLiv;

	/**
	 * T r s suivi dt liv fax.
	 *
	 * @var string
	 */
	private $tRSSuiviDtLivFax;

	/**
	 * T r s suivi dt liv mail.
	 *
	 * @var string
	 */
	private $tRSSuiviDtLivMail;

	/**
	 * T r s type client.
	 *
	 * @var string
	 */
	private $tRSTypeClient;

	/**
	 * T r s type facturation.
	 *
	 * @var string
	 */
	private $tRSTypeFacturation;

	/**
	 * T r s type travail.
	 *
	 * @var string
	 */
	private $tRSTypeTravail;

	/**
	 * Type transport1.
	 *
	 * @var string
	 */
	private $typeTransport1;

	/**
	 * Type transport2.
	 *
	 * @var string
	 */
	private $typeTransport2;

	/**
	 * Type transport3.
	 *
	 * @var string
	 */
	private $typeTransport3;

	/**
	 * Type transport4.
	 *
	 * @var string
	 */
	private $typeTransport4;

	/**
	 * Type transport5.
	 *
	 * @var string
	 */
	private $typeTransport5;

	/**
	 * localisation archives.
	 *
	 * @var string
	 */
	private $localisationArchives;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the allotissement.
	 *
	 * @return boolean Returns the allotissement.
	 */
	public function getAllotissement() {
		return $this->allotissement;
	}

	/**
	 * Get the b l mail.
	 *
	 * @return boolean Returns the b l mail.
	 */
	public function getBLMail() {
		return $this->bLMail;
	}

	/**
	 * Get the cdes mail.
	 *
	 * @return boolean Returns the cdes mail.
	 */
	public function getCdesMail() {
		return $this->cdesMail;
	}

	/**
	 * Get the code activite c g a.
	 *
	 * @return string Returns the code activite c g a.
	 */
	public function getCodeActiviteCGA() {
		return $this->codeActiviteCGA;
	}

	/**
	 * Get the code client.
	 *
	 * @return string Returns the code client.
	 */
	public function getCodeClient() {
		return $this->codeClient;
	}

	/**
	 * Get the code transporteur1.
	 *
	 * @return string Returns the code transporteur1.
	 */
	public function getCodeTransporteur1() {
		return $this->codeTransporteur1;
	}

	/**
	 * Get the code transporteur2.
	 *
	 * @return string Returns the code transporteur2.
	 */
	public function getCodeTransporteur2() {
		return $this->codeTransporteur2;
	}

	/**
	 * Get the code transporteur3.
	 *
	 * @return string Returns the code transporteur3.
	 */
	public function getCodeTransporteur3() {
		return $this->codeTransporteur3;
	}

	/**
	 * Get the code transporteur4.
	 *
	 * @return string Returns the code transporteur4.
	 */
	public function getCodeTransporteur4() {
		return $this->codeTransporteur4;
	}

	/**
	 * Get the code transporteur5.
	 *
	 * @return string Returns the code transporteur5.
	 */
	public function getCodeTransporteur5() {
		return $this->codeTransporteur5;
	}

	/**
	 * Get the date deb exe publication.
	 *
	 * @return DateTime Returns the date deb exe publication.
	 */
	public function getDateDebExePublication() {
		return $this->dateDebExePublication;
	}

	/**
	 * Get the delai livraison.
	 *
	 * @return int Returns the delai livraison.
	 */
	public function getDelaiLivraison() {
		return $this->delaiLivraison;
	}

	/**
	 * Get the devis mail.
	 *
	 * @return boolean Returns the devis mail.
	 */
	public function getDevisMail() {
		return $this->devisMail;
	}

	/**
	 * Get the e a n client.
	 *
	 * @return string Returns the e a n client.
	 */
	public function getEANClient() {
		return $this->eANClient;
	}

	/**
	 * Get the e a n facture papier.
	 *
	 * @return string Returns the e a n facture papier.
	 */
	public function getEANFacturePapier() {
		return $this->eANFacturePapier;
	}

	/**
	 * Get the e a n plateforme.
	 *
	 * @return string Returns the e a n plateforme.
	 */
	public function getEANPlateforme() {
		return $this->eANPlateforme;
	}

	/**
	 * Get the e d i_ export_ b l.
	 *
	 * @return boolean Returns the e d i_ export_ b l.
	 */
	public function getEDI_Export_BL() {
		return $this->eDI_Export_BL;
	}

	/**
	 * Get the e d i_ export_ fac.
	 *
	 * @return boolean Returns the e d i_ export_ fac.
	 */
	public function getEDI_Export_Fac() {
		return $this->eDI_Export_Fac;
	}

	/**
	 * Get the echeance fin decade.
	 *
	 * @return boolean Returns the echeance fin decade.
	 */
	public function getEcheanceFinDecade() {
		return $this->echeanceFinDecade;
	}

	/**
	 * Get the echeance fin quinzaine.
	 *
	 * @return boolean Returns the echeance fin quinzaine.
	 */
	public function getEcheanceFinQuinzaine() {
		return $this->echeanceFinQuinzaine;
	}

	/**
	 * Get the fact_ complement suite.
	 *
	 * @return string Returns the fact_ complement suite.
	 */
	public function getFact_ComplementSuite() {
		return $this->fact_ComplementSuite;
	}

	/**
	 * Get the fact_ zip code.
	 *
	 * @return string Returns the fact_ zip code.
	 */
	public function getFact_ZipCode() {
		return $this->fact_ZipCode;
	}

	/**
	 * Get the ind mail publication.
	 *
	 * @return int Returns the ind mail publication.
	 */
	public function getIndMailPublication() {
		return $this->indMailPublication;
	}

	/**
	 * Get the indice b l mail.
	 *
	 * @return int Returns the indice b l mail.
	 */
	public function getIndiceBLMail() {
		return $this->indiceBLMail;
	}

	/**
	 * Get the indice cdes mail.
	 *
	 * @return int Returns the indice cdes mail.
	 */
	public function getIndiceCdesMail() {
		return $this->indiceCdesMail;
	}

	/**
	 * Get the indice devis mail.
	 *
	 * @return int Returns the indice devis mail.
	 */
	public function getIndiceDevisMail() {
		return $this->indiceDevisMail;
	}

	/**
	 * Get the indice releves mail.
	 *
	 * @return int Returns the indice releves mail.
	 */
	public function getIndiceRelevesMail() {
		return $this->indiceRelevesMail;
	}

	/**
	 * Get the lettre de mission_ date signature.
	 *
	 * @return DateTime Returns the lettre de mission_ date signature.
	 */
	public function getLettreDeMission_DateSignature() {
		return $this->lettreDeMission_DateSignature;
	}

	/**
	 * Get the modele facture manuelle spe.
	 *
	 * @return string Returns the modele facture manuelle spe.
	 */
	public function getModeleFactureManuelleSpe() {
		return $this->modeleFactureManuelleSpe;
	}

	/**
	 * Get the montant depassement autorise.
	 *
	 * @return float Returns the montant depassement autorise.
	 */
	public function getMontantDepassementAutorise() {
		return $this->montantDepassementAutorise;
	}

	/**
	 * Get the motif entree.
	 *
	 * @return string Returns the motif entree.
	 */
	public function getMotifEntree() {
		return $this->motifEntree;
	}

	/**
	 * Get the motif sortie.
	 *
	 * @return string Returns the motif sortie.
	 */
	public function getMotifSortie() {
		return $this->motifSortie;
	}

	/**
	 * Get the mt transport1.
	 *
	 * @return float Returns the mt transport1.
	 */
	public function getMtTransport1() {
		return $this->mtTransport1;
	}

	/**
	 * Get the mt transport2.
	 *
	 * @return float Returns the mt transport2.
	 */
	public function getMtTransport2() {
		return $this->mtTransport2;
	}

	/**
	 * Get the mt transport3.
	 *
	 * @return float Returns the mt transport3.
	 */
	public function getMtTransport3() {
		return $this->mtTransport3;
	}

	/**
	 * Get the mt transport4.
	 *
	 * @return float Returns the mt transport4.
	 */
	public function getMtTransport4() {
		return $this->mtTransport4;
	}

	/**
	 * Get the mt transport5.
	 *
	 * @return float Returns the mt transport5.
	 */
	public function getMtTransport5() {
		return $this->mtTransport5;
	}

	/**
	 * Get the non concerne i s.
	 *
	 * @return boolean Returns the non concerne i s.
	 */
	public function getNonConcerneIS() {
		return $this->nonConcerneIS;
	}

	/**
	 * Get the non concerne t p.
	 *
	 * @return boolean Returns the non concerne t p.
	 */
	public function getNonConcerneTP() {
		return $this->nonConcerneTP;
	}

	/**
	 * Get the non facturable.
	 *
	 * @return boolean Returns the non facturable.
	 */
	public function getNonFacturable() {
		return $this->nonFacturable;
	}

	/**
	 * Get the p m e tarif ou rem spe.
	 *
	 * @return boolean Returns the p m e tarif ou rem spe.
	 */
	public function getPMETarifOuRemSpe() {
		return $this->pMETarifOuRemSpe;
	}

	/**
	 * Get the prevenir mail publier.
	 *
	 * @return boolean Returns the prevenir mail publier.
	 */
	public function getPrevenirMailPublier() {
		return $this->prevenirMailPublier;
	}

	/**
	 * Get the releves mail.
	 *
	 * @return boolean Returns the releves mail.
	 */
	public function getRelevesMail() {
		return $this->relevesMail;
	}

	/**
	 * Get the social_ complement suite.
	 *
	 * @return string Returns the social_ complement suite.
	 */
	public function getSocial_ComplementSuite() {
		return $this->social_ComplementSuite;
	}

	/**
	 * Get the social_ zip code.
	 *
	 * @return string Returns the social_ zip code.
	 */
	public function getSocial_ZipCode() {
		return $this->social_ZipCode;
	}

	/**
	 * Get the t r s art pied.
	 *
	 * @return string Returns the t r s art pied.
	 */
	public function getTRSArtPied() {
		return $this->tRSArtPied;
	}

	/**
	 * Get the t r s art pied2.
	 *
	 * @return string Returns the t r s art pied2.
	 */
	public function getTRSArtPied2() {
		return $this->tRSArtPied2;
	}

	/**
	 * Get the t r s categ march.
	 *
	 * @return string Returns the t r s categ march.
	 */
	public function getTRSCategMarch() {
		return $this->tRSCategMarch;
	}

	/**
	 * Get the t r s centre ana.
	 *
	 * @return string Returns the t r s centre ana.
	 */
	public function getTRSCentreAna() {
		return $this->tRSCentreAna;
	}

	/**
	 * Get the t r s code tarif1.
	 *
	 * @return string Returns the t r s code tarif1.
	 */
	public function getTRSCodeTarif1() {
		return $this->tRSCodeTarif1;
	}

	/**
	 * Get the t r s code tarif1 sens.
	 *
	 * @return string Returns the t r s code tarif1 sens.
	 */
	public function getTRSCodeTarif1Sens() {
		return $this->tRSCodeTarif1Sens;
	}

	/**
	 * Get the t r s code tarif2.
	 *
	 * @return string Returns the t r s code tarif2.
	 */
	public function getTRSCodeTarif2() {
		return $this->tRSCodeTarif2;
	}

	/**
	 * Get the t r s code tarif2 sens.
	 *
	 * @return string Returns the t r s code tarif2 sens.
	 */
	public function getTRSCodeTarif2Sens() {
		return $this->tRSCodeTarif2Sens;
	}

	/**
	 * Get the t r s code tarif3.
	 *
	 * @return string Returns the t r s code tarif3.
	 */
	public function getTRSCodeTarif3() {
		return $this->tRSCodeTarif3;
	}

	/**
	 * Get the t r s code tarif3 sens.
	 *
	 * @return string Returns the t r s code tarif3 sens.
	 */
	public function getTRSCodeTarif3Sens() {
		return $this->tRSCodeTarif3Sens;
	}

	/**
	 * Get the t r s code tarif4.
	 *
	 * @return string Returns the t r s code tarif4.
	 */
	public function getTRSCodeTarif4() {
		return $this->tRSCodeTarif4;
	}

	/**
	 * Get the t r s code tarif4 sens.
	 *
	 * @return string Returns the t r s code tarif4 sens.
	 */
	public function getTRSCodeTarif4Sens() {
		return $this->tRSCodeTarif4Sens;
	}

	/**
	 * Get the t r s code tarif5.
	 *
	 * @return string Returns the t r s code tarif5.
	 */
	public function getTRSCodeTarif5() {
		return $this->tRSCodeTarif5;
	}

	/**
	 * Get the t r s code tarif5 sens.
	 *
	 * @return string Returns the t r s code tarif5 sens.
	 */
	public function getTRSCodeTarif5Sens() {
		return $this->tRSCodeTarif5Sens;
	}

	/**
	 * Get the t r s code tarif6.
	 *
	 * @return string Returns the t r s code tarif6.
	 */
	public function getTRSCodeTarif6() {
		return $this->tRSCodeTarif6;
	}

	/**
	 * Get the t r s code tarif6 sens.
	 *
	 * @return string Returns the t r s code tarif6 sens.
	 */
	public function getTRSCodeTarif6Sens() {
		return $this->tRSCodeTarif6Sens;
	}

	/**
	 * Get the t r s code tarif def.
	 *
	 * @return int Returns the t r s code tarif def.
	 */
	public function getTRSCodeTarifDef() {
		return $this->tRSCodeTarifDef;
	}

	/**
	 * Get the t r s comment1.
	 *
	 * @return string Returns the t r s comment1.
	 */
	public function getTRSComment1() {
		return $this->tRSComment1;
	}

	/**
	 * Get the t r s comment2.
	 *
	 * @return string Returns the t r s comment2.
	 */
	public function getTRSComment2() {
		return $this->tRSComment2;
	}

	/**
	 * Get the t r s comment3.
	 *
	 * @return string Returns the t r s comment3.
	 */
	public function getTRSComment3() {
		return $this->tRSComment3;
	}

	/**
	 * Get the t r s comment4.
	 *
	 * @return string Returns the t r s comment4.
	 */
	public function getTRSComment4() {
		return $this->tRSComment4;
	}

	/**
	 * Get the t r s comment5.
	 *
	 * @return string Returns the t r s comment5.
	 */
	public function getTRSComment5() {
		return $this->tRSComment5;
	}

	/**
	 * Get the t r s comment6.
	 *
	 * @return string Returns the t r s comment6.
	 */
	public function getTRSComment6() {
		return $this->tRSComment6;
	}

	/**
	 * Get the t r s comment7.
	 *
	 * @return string Returns the t r s comment7.
	 */
	public function getTRSComment7() {
		return $this->tRSComment7;
	}

	/**
	 * Get the t r s comment8.
	 *
	 * @return string Returns the t r s comment8.
	 */
	public function getTRSComment8() {
		return $this->tRSComment8;
	}

	/**
	 * Get the t r s comment9.
	 *
	 * @return string Returns the t r s comment9.
	 */
	public function getTRSComment9() {
		return $this->tRSComment9;
	}

	/**
	 * Get the t r s consignes1.
	 *
	 * @return string Returns the t r s consignes1.
	 */
	public function getTRSConsignes1() {
		return $this->tRSConsignes1;
	}

	/**
	 * Get the t r s consignes2.
	 *
	 * @return string Returns the t r s consignes2.
	 */
	public function getTRSConsignes2() {
		return $this->tRSConsignes2;
	}

	/**
	 * Get the t r s consignes3.
	 *
	 * @return string Returns the t r s consignes3.
	 */
	public function getTRSConsignes3() {
		return $this->tRSConsignes3;
	}

	/**
	 * Get the t r s gestion palettes.
	 *
	 * @return boolean Returns the t r s gestion palettes.
	 */
	public function getTRSGestionPalettes() {
		return $this->tRSGestionPalettes;
	}

	/**
	 * Get the t r s marchandise sensible.
	 *
	 * @return boolean Returns the t r s marchandise sensible.
	 */
	public function getTRSMarchandiseSensible() {
		return $this->tRSMarchandiseSensible;
	}

	/**
	 * Get the t r s modele facture spe.
	 *
	 * @return string Returns the t r s modele facture spe.
	 */
	public function getTRSModeleFactureSpe() {
		return $this->tRSModeleFactureSpe;
	}

	/**
	 * Get the t r s poids mini pal.
	 *
	 * @return float Returns the t r s poids mini pal.
	 */
	public function getTRSPoidsMiniPal() {
		return $this->tRSPoidsMiniPal;
	}

	/**
	 * Get the t r s port du auto.
	 *
	 * @return boolean Returns the t r s port du auto.
	 */
	public function getTRSPortDuAuto() {
		return $this->tRSPortDuAuto;
	}

	/**
	 * Get the t r s suivi c a mens.
	 *
	 * @return boolean Returns the t r s suivi c a mens.
	 */
	public function getTRSSuiviCAMens() {
		return $this->tRSSuiviCAMens;
	}

	/**
	 * Get the t r s suivi dt enl.
	 *
	 * @return boolean Returns the t r s suivi dt enl.
	 */
	public function getTRSSuiviDtEnl() {
		return $this->tRSSuiviDtEnl;
	}

	/**
	 * Get the t r s suivi dt liv.
	 *
	 * @return boolean Returns the t r s suivi dt liv.
	 */
	public function getTRSSuiviDtLiv() {
		return $this->tRSSuiviDtLiv;
	}

	/**
	 * Get the t r s suivi dt liv fax.
	 *
	 * @return string Returns the t r s suivi dt liv fax.
	 */
	public function getTRSSuiviDtLivFax() {
		return $this->tRSSuiviDtLivFax;
	}

	/**
	 * Get the t r s suivi dt liv mail.
	 *
	 * @return string Returns the t r s suivi dt liv mail.
	 */
	public function getTRSSuiviDtLivMail() {
		return $this->tRSSuiviDtLivMail;
	}

	/**
	 * Get the t r s type client.
	 *
	 * @return string Returns the t r s type client.
	 */
	public function getTRSTypeClient() {
		return $this->tRSTypeClient;
	}

	/**
	 * Get the t r s type facturation.
	 *
	 * @return string Returns the t r s type facturation.
	 */
	public function getTRSTypeFacturation() {
		return $this->tRSTypeFacturation;
	}

	/**
	 * Get the t r s type travail.
	 *
	 * @return string Returns the t r s type travail.
	 */
	public function getTRSTypeTravail() {
		return $this->tRSTypeTravail;
	}

	/**
	 * Get the type transport1.
	 *
	 * @return string Returns the type transport1.
	 */
	public function getTypeTransport1() {
		return $this->typeTransport1;
	}

	/**
	 * Get the type transport2.
	 *
	 * @return string Returns the type transport2.
	 */
	public function getTypeTransport2() {
		return $this->typeTransport2;
	}

	/**
	 * Get the type transport3.
	 *
	 * @return string Returns the type transport3.
	 */
	public function getTypeTransport3() {
		return $this->typeTransport3;
	}

	/**
	 * Get the type transport4.
	 *
	 * @return string Returns the type transport4.
	 */
	public function getTypeTransport4() {
		return $this->typeTransport4;
	}

	/**
	 * Get the type transport5.
	 *
	 * @return string Returns the type transport5.
	 */
	public function getTypeTransport5() {
		return $this->typeTransport5;
	}

	/**
	 * Get the localisation archives.
	 *
	 * @return string Returns the localisation archives.
	 */
	public function getlocalisationArchives() {
		return $this->localisationArchives;
	}

	/**
	 * Set the allotissement.
	 *
	 * @param boolean $allotissement The allotissement.
	 * @return Clients2 Returns this clients2.
	 */
	public function setAllotissement($allotissement) {
		$this->allotissement = $allotissement;
		return $this;
	}

	/**
	 * Set the b l mail.
	 *
	 * @param boolean $bLMail The b l mail.
	 * @return Clients2 Returns this clients2.
	 */
	public function setBLMail($bLMail) {
		$this->bLMail = $bLMail;
		return $this;
	}

	/**
	 * Set the cdes mail.
	 *
	 * @param boolean $cdesMail The cdes mail.
	 * @return Clients2 Returns this clients2.
	 */
	public function setCdesMail($cdesMail) {
		$this->cdesMail = $cdesMail;
		return $this;
	}

	/**
	 * Set the code activite c g a.
	 *
	 * @param string $codeActiviteCGA The code activite c g a.
	 * @return Clients2 Returns this clients2.
	 */
	public function setCodeActiviteCGA($codeActiviteCGA) {
		$this->codeActiviteCGA = $codeActiviteCGA;
		return $this;
	}

	/**
	 * Set the code client.
	 *
	 * @param string $codeClient The code client.
	 * @return Clients2 Returns this clients2.
	 */
	public function setCodeClient($codeClient) {
		$this->codeClient = $codeClient;
		return $this;
	}

	/**
	 * Set the code transporteur1.
	 *
	 * @param string $codeTransporteur1 The code transporteur1.
	 * @return Clients2 Returns this clients2.
	 */
	public function setCodeTransporteur1($codeTransporteur1) {
		$this->codeTransporteur1 = $codeTransporteur1;
		return $this;
	}

	/**
	 * Set the code transporteur2.
	 *
	 * @param string $codeTransporteur2 The code transporteur2.
	 * @return Clients2 Returns this clients2.
	 */
	public function setCodeTransporteur2($codeTransporteur2) {
		$this->codeTransporteur2 = $codeTransporteur2;
		return $this;
	}

	/**
	 * Set the code transporteur3.
	 *
	 * @param string $codeTransporteur3 The code transporteur3.
	 * @return Clients2 Returns this clients2.
	 */
	public function setCodeTransporteur3($codeTransporteur3) {
		$this->codeTransporteur3 = $codeTransporteur3;
		return $this;
	}

	/**
	 * Set the code transporteur4.
	 *
	 * @param string $codeTransporteur4 The code transporteur4.
	 * @return Clients2 Returns this clients2.
	 */
	public function setCodeTransporteur4($codeTransporteur4) {
		$this->codeTransporteur4 = $codeTransporteur4;
		return $this;
	}

	/**
	 * Set the code transporteur5.
	 *
	 * @param string $codeTransporteur5 The code transporteur5.
	 * @return Clients2 Returns this clients2.
	 */
	public function setCodeTransporteur5($codeTransporteur5) {
		$this->codeTransporteur5 = $codeTransporteur5;
		return $this;
	}

	/**
	 * Set the date deb exe publication.
	 *
	 * @param DateTime $dateDebExePublication The date deb exe publication.
	 * @return Clients2 Returns this clients2.
	 */
	public function setDateDebExePublication(DateTime $dateDebExePublication = null) {
		$this->dateDebExePublication = $dateDebExePublication;
		return $this;
	}

	/**
	 * Set the delai livraison.
	 *
	 * @param int $delaiLivraison The delai livraison.
	 * @return Clients2 Returns this clients2.
	 */
	public function setDelaiLivraison($delaiLivraison) {
		$this->delaiLivraison = $delaiLivraison;
		return $this;
	}

	/**
	 * Set the devis mail.
	 *
	 * @param boolean $devisMail The devis mail.
	 * @return Clients2 Returns this clients2.
	 */
	public function setDevisMail($devisMail) {
		$this->devisMail = $devisMail;
		return $this;
	}

	/**
	 * Set the e a n client.
	 *
	 * @param string $eANClient The e a n client.
	 * @return Clients2 Returns this clients2.
	 */
	public function setEANClient($eANClient) {
		$this->eANClient = $eANClient;
		return $this;
	}

	/**
	 * Set the e a n facture papier.
	 *
	 * @param string $eANFacturePapier The e a n facture papier.
	 * @return Clients2 Returns this clients2.
	 */
	public function setEANFacturePapier($eANFacturePapier) {
		$this->eANFacturePapier = $eANFacturePapier;
		return $this;
	}

	/**
	 * Set the e a n plateforme.
	 *
	 * @param string $eANPlateforme The e a n plateforme.
	 * @return Clients2 Returns this clients2.
	 */
	public function setEANPlateforme($eANPlateforme) {
		$this->eANPlateforme = $eANPlateforme;
		return $this;
	}

	/**
	 * Set the e d i_ export_ b l.
	 *
	 * @param boolean $eDI_Export_BL The e d i_ export_ b l.
	 * @return Clients2 Returns this clients2.
	 */
	public function setEDI_Export_BL($eDI_Export_BL) {
		$this->eDI_Export_BL = $eDI_Export_BL;
		return $this;
	}

	/**
	 * Set the e d i_ export_ fac.
	 *
	 * @param boolean $eDI_Export_Fac The e d i_ export_ fac.
	 * @return Clients2 Returns this clients2.
	 */
	public function setEDI_Export_Fac($eDI_Export_Fac) {
		$this->eDI_Export_Fac = $eDI_Export_Fac;
		return $this;
	}

	/**
	 * Set the echeance fin decade.
	 *
	 * @param boolean $echeanceFinDecade The echeance fin decade.
	 * @return Clients2 Returns this clients2.
	 */
	public function setEcheanceFinDecade($echeanceFinDecade) {
		$this->echeanceFinDecade = $echeanceFinDecade;
		return $this;
	}

	/**
	 * Set the echeance fin quinzaine.
	 *
	 * @param boolean $echeanceFinQuinzaine The echeance fin quinzaine.
	 * @return Clients2 Returns this clients2.
	 */
	public function setEcheanceFinQuinzaine($echeanceFinQuinzaine) {
		$this->echeanceFinQuinzaine = $echeanceFinQuinzaine;
		return $this;
	}

	/**
	 * Set the fact_ complement suite.
	 *
	 * @param string $fact_ComplementSuite The fact_ complement suite.
	 * @return Clients2 Returns this clients2.
	 */
	public function setFact_ComplementSuite($fact_ComplementSuite) {
		$this->fact_ComplementSuite = $fact_ComplementSuite;
		return $this;
	}

	/**
	 * Set the fact_ zip code.
	 *
	 * @param string $fact_ZipCode The fact_ zip code.
	 * @return Clients2 Returns this clients2.
	 */
	public function setFact_ZipCode($fact_ZipCode) {
		$this->fact_ZipCode = $fact_ZipCode;
		return $this;
	}

	/**
	 * Set the ind mail publication.
	 *
	 * @param int $indMailPublication The ind mail publication.
	 * @return Clients2 Returns this clients2.
	 */
	public function setIndMailPublication($indMailPublication) {
		$this->indMailPublication = $indMailPublication;
		return $this;
	}

	/**
	 * Set the indice b l mail.
	 *
	 * @param int $indiceBLMail The indice b l mail.
	 * @return Clients2 Returns this clients2.
	 */
	public function setIndiceBLMail($indiceBLMail) {
		$this->indiceBLMail = $indiceBLMail;
		return $this;
	}

	/**
	 * Set the indice cdes mail.
	 *
	 * @param int $indiceCdesMail The indice cdes mail.
	 * @return Clients2 Returns this clients2.
	 */
	public function setIndiceCdesMail($indiceCdesMail) {
		$this->indiceCdesMail = $indiceCdesMail;
		return $this;
	}

	/**
	 * Set the indice devis mail.
	 *
	 * @param int $indiceDevisMail The indice devis mail.
	 * @return Clients2 Returns this clients2.
	 */
	public function setIndiceDevisMail($indiceDevisMail) {
		$this->indiceDevisMail = $indiceDevisMail;
		return $this;
	}

	/**
	 * Set the indice releves mail.
	 *
	 * @param int $indiceRelevesMail The indice releves mail.
	 * @return Clients2 Returns this clients2.
	 */
	public function setIndiceRelevesMail($indiceRelevesMail) {
		$this->indiceRelevesMail = $indiceRelevesMail;
		return $this;
	}

	/**
	 * Set the lettre de mission_ date signature.
	 *
	 * @param DateTime $lettreDeMission_DateSignature The lettre de mission_ date signature.
	 * @return Clients2 Returns this clients2.
	 */
	public function setLettreDeMission_DateSignature(DateTime $lettreDeMission_DateSignature = null) {
		$this->lettreDeMission_DateSignature = $lettreDeMission_DateSignature;
		return $this;
	}

	/**
	 * Set the modele facture manuelle spe.
	 *
	 * @param string $modeleFactureManuelleSpe The modele facture manuelle spe.
	 * @return Clients2 Returns this clients2.
	 */
	public function setModeleFactureManuelleSpe($modeleFactureManuelleSpe) {
		$this->modeleFactureManuelleSpe = $modeleFactureManuelleSpe;
		return $this;
	}

	/**
	 * Set the montant depassement autorise.
	 *
	 * @param float $montantDepassementAutorise The montant depassement autorise.
	 * @return Clients2 Returns this clients2.
	 */
	public function setMontantDepassementAutorise($montantDepassementAutorise) {
		$this->montantDepassementAutorise = $montantDepassementAutorise;
		return $this;
	}

	/**
	 * Set the motif entree.
	 *
	 * @param string $motifEntree The motif entree.
	 * @return Clients2 Returns this clients2.
	 */
	public function setMotifEntree($motifEntree) {
		$this->motifEntree = $motifEntree;
		return $this;
	}

	/**
	 * Set the motif sortie.
	 *
	 * @param string $motifSortie The motif sortie.
	 * @return Clients2 Returns this clients2.
	 */
	public function setMotifSortie($motifSortie) {
		$this->motifSortie = $motifSortie;
		return $this;
	}

	/**
	 * Set the mt transport1.
	 *
	 * @param float $mtTransport1 The mt transport1.
	 * @return Clients2 Returns this clients2.
	 */
	public function setMtTransport1($mtTransport1) {
		$this->mtTransport1 = $mtTransport1;
		return $this;
	}

	/**
	 * Set the mt transport2.
	 *
	 * @param float $mtTransport2 The mt transport2.
	 * @return Clients2 Returns this clients2.
	 */
	public function setMtTransport2($mtTransport2) {
		$this->mtTransport2 = $mtTransport2;
		return $this;
	}

	/**
	 * Set the mt transport3.
	 *
	 * @param float $mtTransport3 The mt transport3.
	 * @return Clients2 Returns this clients2.
	 */
	public function setMtTransport3($mtTransport3) {
		$this->mtTransport3 = $mtTransport3;
		return $this;
	}

	/**
	 * Set the mt transport4.
	 *
	 * @param float $mtTransport4 The mt transport4.
	 * @return Clients2 Returns this clients2.
	 */
	public function setMtTransport4($mtTransport4) {
		$this->mtTransport4 = $mtTransport4;
		return $this;
	}

	/**
	 * Set the mt transport5.
	 *
	 * @param float $mtTransport5 The mt transport5.
	 * @return Clients2 Returns this clients2.
	 */
	public function setMtTransport5($mtTransport5) {
		$this->mtTransport5 = $mtTransport5;
		return $this;
	}

	/**
	 * Set the non concerne i s.
	 *
	 * @param boolean $nonConcerneIS The non concerne i s.
	 * @return Clients2 Returns this clients2.
	 */
	public function setNonConcerneIS($nonConcerneIS) {
		$this->nonConcerneIS = $nonConcerneIS;
		return $this;
	}

	/**
	 * Set the non concerne t p.
	 *
	 * @param boolean $nonConcerneTP The non concerne t p.
	 * @return Clients2 Returns this clients2.
	 */
	public function setNonConcerneTP($nonConcerneTP) {
		$this->nonConcerneTP = $nonConcerneTP;
		return $this;
	}

	/**
	 * Set the non facturable.
	 *
	 * @param boolean $nonFacturable The non facturable.
	 * @return Clients2 Returns this clients2.
	 */
	public function setNonFacturable($nonFacturable) {
		$this->nonFacturable = $nonFacturable;
		return $this;
	}

	/**
	 * Set the p m e tarif ou rem spe.
	 *
	 * @param boolean $pMETarifOuRemSpe The p m e tarif ou rem spe.
	 * @return Clients2 Returns this clients2.
	 */
	public function setPMETarifOuRemSpe($pMETarifOuRemSpe) {
		$this->pMETarifOuRemSpe = $pMETarifOuRemSpe;
		return $this;
	}

	/**
	 * Set the prevenir mail publier.
	 *
	 * @param boolean $prevenirMailPublier The prevenir mail publier.
	 * @return Clients2 Returns this clients2.
	 */
	public function setPrevenirMailPublier($prevenirMailPublier) {
		$this->prevenirMailPublier = $prevenirMailPublier;
		return $this;
	}

	/**
	 * Set the releves mail.
	 *
	 * @param boolean $relevesMail The releves mail.
	 * @return Clients2 Returns this clients2.
	 */
	public function setRelevesMail($relevesMail) {
		$this->relevesMail = $relevesMail;
		return $this;
	}

	/**
	 * Set the social_ complement suite.
	 *
	 * @param string $social_ComplementSuite The social_ complement suite.
	 * @return Clients2 Returns this clients2.
	 */
	public function setSocial_ComplementSuite($social_ComplementSuite) {
		$this->social_ComplementSuite = $social_ComplementSuite;
		return $this;
	}

	/**
	 * Set the social_ zip code.
	 *
	 * @param string $social_ZipCode The social_ zip code.
	 * @return Clients2 Returns this clients2.
	 */
	public function setSocial_ZipCode($social_ZipCode) {
		$this->social_ZipCode = $social_ZipCode;
		return $this;
	}

	/**
	 * Set the t r s art pied.
	 *
	 * @param string $tRSArtPied The t r s art pied.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSArtPied($tRSArtPied) {
		$this->tRSArtPied = $tRSArtPied;
		return $this;
	}

	/**
	 * Set the t r s art pied2.
	 *
	 * @param string $tRSArtPied2 The t r s art pied2.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSArtPied2($tRSArtPied2) {
		$this->tRSArtPied2 = $tRSArtPied2;
		return $this;
	}

	/**
	 * Set the t r s categ march.
	 *
	 * @param string $tRSCategMarch The t r s categ march.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSCategMarch($tRSCategMarch) {
		$this->tRSCategMarch = $tRSCategMarch;
		return $this;
	}

	/**
	 * Set the t r s centre ana.
	 *
	 * @param string $tRSCentreAna The t r s centre ana.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSCentreAna($tRSCentreAna) {
		$this->tRSCentreAna = $tRSCentreAna;
		return $this;
	}

	/**
	 * Set the t r s code tarif1.
	 *
	 * @param string $tRSCodeTarif1 The t r s code tarif1.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSCodeTarif1($tRSCodeTarif1) {
		$this->tRSCodeTarif1 = $tRSCodeTarif1;
		return $this;
	}

	/**
	 * Set the t r s code tarif1 sens.
	 *
	 * @param string $tRSCodeTarif1Sens The t r s code tarif1 sens.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSCodeTarif1Sens($tRSCodeTarif1Sens) {
		$this->tRSCodeTarif1Sens = $tRSCodeTarif1Sens;
		return $this;
	}

	/**
	 * Set the t r s code tarif2.
	 *
	 * @param string $tRSCodeTarif2 The t r s code tarif2.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSCodeTarif2($tRSCodeTarif2) {
		$this->tRSCodeTarif2 = $tRSCodeTarif2;
		return $this;
	}

	/**
	 * Set the t r s code tarif2 sens.
	 *
	 * @param string $tRSCodeTarif2Sens The t r s code tarif2 sens.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSCodeTarif2Sens($tRSCodeTarif2Sens) {
		$this->tRSCodeTarif2Sens = $tRSCodeTarif2Sens;
		return $this;
	}

	/**
	 * Set the t r s code tarif3.
	 *
	 * @param string $tRSCodeTarif3 The t r s code tarif3.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSCodeTarif3($tRSCodeTarif3) {
		$this->tRSCodeTarif3 = $tRSCodeTarif3;
		return $this;
	}

	/**
	 * Set the t r s code tarif3 sens.
	 *
	 * @param string $tRSCodeTarif3Sens The t r s code tarif3 sens.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSCodeTarif3Sens($tRSCodeTarif3Sens) {
		$this->tRSCodeTarif3Sens = $tRSCodeTarif3Sens;
		return $this;
	}

	/**
	 * Set the t r s code tarif4.
	 *
	 * @param string $tRSCodeTarif4 The t r s code tarif4.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSCodeTarif4($tRSCodeTarif4) {
		$this->tRSCodeTarif4 = $tRSCodeTarif4;
		return $this;
	}

	/**
	 * Set the t r s code tarif4 sens.
	 *
	 * @param string $tRSCodeTarif4Sens The t r s code tarif4 sens.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSCodeTarif4Sens($tRSCodeTarif4Sens) {
		$this->tRSCodeTarif4Sens = $tRSCodeTarif4Sens;
		return $this;
	}

	/**
	 * Set the t r s code tarif5.
	 *
	 * @param string $tRSCodeTarif5 The t r s code tarif5.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSCodeTarif5($tRSCodeTarif5) {
		$this->tRSCodeTarif5 = $tRSCodeTarif5;
		return $this;
	}

	/**
	 * Set the t r s code tarif5 sens.
	 *
	 * @param string $tRSCodeTarif5Sens The t r s code tarif5 sens.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSCodeTarif5Sens($tRSCodeTarif5Sens) {
		$this->tRSCodeTarif5Sens = $tRSCodeTarif5Sens;
		return $this;
	}

	/**
	 * Set the t r s code tarif6.
	 *
	 * @param string $tRSCodeTarif6 The t r s code tarif6.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSCodeTarif6($tRSCodeTarif6) {
		$this->tRSCodeTarif6 = $tRSCodeTarif6;
		return $this;
	}

	/**
	 * Set the t r s code tarif6 sens.
	 *
	 * @param string $tRSCodeTarif6Sens The t r s code tarif6 sens.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSCodeTarif6Sens($tRSCodeTarif6Sens) {
		$this->tRSCodeTarif6Sens = $tRSCodeTarif6Sens;
		return $this;
	}

	/**
	 * Set the t r s code tarif def.
	 *
	 * @param int $tRSCodeTarifDef The t r s code tarif def.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSCodeTarifDef($tRSCodeTarifDef) {
		$this->tRSCodeTarifDef = $tRSCodeTarifDef;
		return $this;
	}

	/**
	 * Set the t r s comment1.
	 *
	 * @param string $tRSComment1 The t r s comment1.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSComment1($tRSComment1) {
		$this->tRSComment1 = $tRSComment1;
		return $this;
	}

	/**
	 * Set the t r s comment2.
	 *
	 * @param string $tRSComment2 The t r s comment2.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSComment2($tRSComment2) {
		$this->tRSComment2 = $tRSComment2;
		return $this;
	}

	/**
	 * Set the t r s comment3.
	 *
	 * @param string $tRSComment3 The t r s comment3.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSComment3($tRSComment3) {
		$this->tRSComment3 = $tRSComment3;
		return $this;
	}

	/**
	 * Set the t r s comment4.
	 *
	 * @param string $tRSComment4 The t r s comment4.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSComment4($tRSComment4) {
		$this->tRSComment4 = $tRSComment4;
		return $this;
	}

	/**
	 * Set the t r s comment5.
	 *
	 * @param string $tRSComment5 The t r s comment5.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSComment5($tRSComment5) {
		$this->tRSComment5 = $tRSComment5;
		return $this;
	}

	/**
	 * Set the t r s comment6.
	 *
	 * @param string $tRSComment6 The t r s comment6.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSComment6($tRSComment6) {
		$this->tRSComment6 = $tRSComment6;
		return $this;
	}

	/**
	 * Set the t r s comment7.
	 *
	 * @param string $tRSComment7 The t r s comment7.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSComment7($tRSComment7) {
		$this->tRSComment7 = $tRSComment7;
		return $this;
	}

	/**
	 * Set the t r s comment8.
	 *
	 * @param string $tRSComment8 The t r s comment8.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSComment8($tRSComment8) {
		$this->tRSComment8 = $tRSComment8;
		return $this;
	}

	/**
	 * Set the t r s comment9.
	 *
	 * @param string $tRSComment9 The t r s comment9.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSComment9($tRSComment9) {
		$this->tRSComment9 = $tRSComment9;
		return $this;
	}

	/**
	 * Set the t r s consignes1.
	 *
	 * @param string $tRSConsignes1 The t r s consignes1.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSConsignes1($tRSConsignes1) {
		$this->tRSConsignes1 = $tRSConsignes1;
		return $this;
	}

	/**
	 * Set the t r s consignes2.
	 *
	 * @param string $tRSConsignes2 The t r s consignes2.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSConsignes2($tRSConsignes2) {
		$this->tRSConsignes2 = $tRSConsignes2;
		return $this;
	}

	/**
	 * Set the t r s consignes3.
	 *
	 * @param string $tRSConsignes3 The t r s consignes3.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSConsignes3($tRSConsignes3) {
		$this->tRSConsignes3 = $tRSConsignes3;
		return $this;
	}

	/**
	 * Set the t r s gestion palettes.
	 *
	 * @param boolean $tRSGestionPalettes The t r s gestion palettes.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSGestionPalettes($tRSGestionPalettes) {
		$this->tRSGestionPalettes = $tRSGestionPalettes;
		return $this;
	}

	/**
	 * Set the t r s marchandise sensible.
	 *
	 * @param boolean $tRSMarchandiseSensible The t r s marchandise sensible.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSMarchandiseSensible($tRSMarchandiseSensible) {
		$this->tRSMarchandiseSensible = $tRSMarchandiseSensible;
		return $this;
	}

	/**
	 * Set the t r s modele facture spe.
	 *
	 * @param string $tRSModeleFactureSpe The t r s modele facture spe.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSModeleFactureSpe($tRSModeleFactureSpe) {
		$this->tRSModeleFactureSpe = $tRSModeleFactureSpe;
		return $this;
	}

	/**
	 * Set the t r s poids mini pal.
	 *
	 * @param float $tRSPoidsMiniPal The t r s poids mini pal.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSPoidsMiniPal($tRSPoidsMiniPal) {
		$this->tRSPoidsMiniPal = $tRSPoidsMiniPal;
		return $this;
	}

	/**
	 * Set the t r s port du auto.
	 *
	 * @param boolean $tRSPortDuAuto The t r s port du auto.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSPortDuAuto($tRSPortDuAuto) {
		$this->tRSPortDuAuto = $tRSPortDuAuto;
		return $this;
	}

	/**
	 * Set the t r s suivi c a mens.
	 *
	 * @param boolean $tRSSuiviCAMens The t r s suivi c a mens.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSSuiviCAMens($tRSSuiviCAMens) {
		$this->tRSSuiviCAMens = $tRSSuiviCAMens;
		return $this;
	}

	/**
	 * Set the t r s suivi dt enl.
	 *
	 * @param boolean $tRSSuiviDtEnl The t r s suivi dt enl.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSSuiviDtEnl($tRSSuiviDtEnl) {
		$this->tRSSuiviDtEnl = $tRSSuiviDtEnl;
		return $this;
	}

	/**
	 * Set the t r s suivi dt liv.
	 *
	 * @param boolean $tRSSuiviDtLiv The t r s suivi dt liv.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSSuiviDtLiv($tRSSuiviDtLiv) {
		$this->tRSSuiviDtLiv = $tRSSuiviDtLiv;
		return $this;
	}

	/**
	 * Set the t r s suivi dt liv fax.
	 *
	 * @param string $tRSSuiviDtLivFax The t r s suivi dt liv fax.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSSuiviDtLivFax($tRSSuiviDtLivFax) {
		$this->tRSSuiviDtLivFax = $tRSSuiviDtLivFax;
		return $this;
	}

	/**
	 * Set the t r s suivi dt liv mail.
	 *
	 * @param string $tRSSuiviDtLivMail The t r s suivi dt liv mail.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSSuiviDtLivMail($tRSSuiviDtLivMail) {
		$this->tRSSuiviDtLivMail = $tRSSuiviDtLivMail;
		return $this;
	}

	/**
	 * Set the t r s type client.
	 *
	 * @param string $tRSTypeClient The t r s type client.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSTypeClient($tRSTypeClient) {
		$this->tRSTypeClient = $tRSTypeClient;
		return $this;
	}

	/**
	 * Set the t r s type facturation.
	 *
	 * @param string $tRSTypeFacturation The t r s type facturation.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSTypeFacturation($tRSTypeFacturation) {
		$this->tRSTypeFacturation = $tRSTypeFacturation;
		return $this;
	}

	/**
	 * Set the t r s type travail.
	 *
	 * @param string $tRSTypeTravail The t r s type travail.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTRSTypeTravail($tRSTypeTravail) {
		$this->tRSTypeTravail = $tRSTypeTravail;
		return $this;
	}

	/**
	 * Set the type transport1.
	 *
	 * @param string $typeTransport1 The type transport1.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTypeTransport1($typeTransport1) {
		$this->typeTransport1 = $typeTransport1;
		return $this;
	}

	/**
	 * Set the type transport2.
	 *
	 * @param string $typeTransport2 The type transport2.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTypeTransport2($typeTransport2) {
		$this->typeTransport2 = $typeTransport2;
		return $this;
	}

	/**
	 * Set the type transport3.
	 *
	 * @param string $typeTransport3 The type transport3.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTypeTransport3($typeTransport3) {
		$this->typeTransport3 = $typeTransport3;
		return $this;
	}

	/**
	 * Set the type transport4.
	 *
	 * @param string $typeTransport4 The type transport4.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTypeTransport4($typeTransport4) {
		$this->typeTransport4 = $typeTransport4;
		return $this;
	}

	/**
	 * Set the type transport5.
	 *
	 * @param string $typeTransport5 The type transport5.
	 * @return Clients2 Returns this clients2.
	 */
	public function setTypeTransport5($typeTransport5) {
		$this->typeTransport5 = $typeTransport5;
		return $this;
	}

	/**
	 * Set the localisation archives.
	 *
	 * @param string $localisationArchives The localisation archives.
	 * @return Clients2 Returns this clients2.
	 */
	public function setlocalisationArchives($localisationArchives) {
		$this->localisationArchives = $localisationArchives;
		return $this;
	}

}
