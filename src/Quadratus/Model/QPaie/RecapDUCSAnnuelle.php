<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QPaie;

use DateTime;

/**
 * Recap d u c s annuelle model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class RecapDUCSAnnuelle {

	/**
	 * A editer ducs.
	 *
	 * @var boolean
	 */
	private $aEditerDucs;

	/**
	 * Acompte.
	 *
	 * @var float
	 */
	private $acompte;

	/**
	 * Arrondi base.
	 *
	 * @var string
	 */
	private $arrondiBase;

	/**
	 * Arrondi cotis.
	 *
	 * @var string
	 */
	private $arrondiCotis;

	/**
	 * Code centre.
	 *
	 * @var string
	 */
	private $codeCentre;

	/**
	 * Code etablissement.
	 *
	 * @var int
	 */
	private $codeEtablissement;

	/**
	 * Date reglement.
	 *
	 * @var DateTime
	 */
	private $dateReglement;

	/**
	 * Date verse salaire.
	 *
	 * @var DateTime
	 */
	private $dateVerseSalaire;

	/**
	 * Ducs euro.
	 *
	 * @var boolean
	 */
	private $ducsEuro;

	/**
	 * Effectif inscrit.
	 *
	 * @var int
	 */
	private $effectifInscrit;

	/**
	 * Effectif moyen.
	 *
	 * @var float
	 */
	private $effectifMoyen;

	/**
	 * Effectif paye.
	 *
	 * @var int
	 */
	private $effectifPaye;

	/**
	 * Fin per.
	 *
	 * @var DateTime
	 */
	private $finPer;

	/**
	 * Grand decalage.
	 *
	 * @var boolean
	 */
	private $grandDecalage;

	/**
	 * Lien document.
	 *
	 * @var string
	 */
	private $lienDocument;

	/**
	 * Methode calcul c i c e h e.
	 *
	 * @var string
	 */
	private $methodeCalculCICEHE;

	/**
	 * Montant total.
	 *
	 * @var float
	 */
	private $montantTotal;

	/**
	 * Motif ecart eff.
	 *
	 * @var string
	 */
	private $motifEcartEff;

	/**
	 * Mt aide ct aides.
	 *
	 * @var float
	 */
	private $mtAideCtAides;

	/**
	 * Mt brut d a d s.
	 *
	 * @var float
	 */
	private $mtBrutDADS;

	/**
	 * Mt regul l o d e o m.
	 *
	 * @var float
	 */
	private $mtRegulLODEOM;

	/**
	 * Nb autres.
	 *
	 * @var float
	 */
	private $nbAutres;

	/**
	 * Nb femmes.
	 *
	 * @var float
	 */
	private $nbFemmes;

	/**
	 * Nb fin contrat.
	 *
	 * @var float
	 */
	private $nbFinContrat;

	/**
	 * Nb hommes.
	 *
	 * @var float
	 */
	private $nbHommes;

	/**
	 * No affiliation.
	 *
	 * @var string
	 */
	private $noAffiliation;

	/**
	 * Organisme.
	 *
	 * @var string
	 */
	private $organisme;

	/**
	 * Paie decalee.
	 *
	 * @var boolean
	 */
	private $paieDecalee;

	/**
	 * Per deb c i c e.
	 *
	 * @var DateTime
	 */
	private $perDebCICE;

	/**
	 * Per fin c i c e.
	 *
	 * @var DateTime
	 */
	private $perFinCICE;

	/**
	 * Periode.
	 *
	 * @var string
	 */
	private $periode;

	/**
	 * Periode decla.
	 *
	 * @var DateTime
	 */
	private $periodeDecla;

	/**
	 * Petit decalage.
	 *
	 * @var boolean
	 */
	private $petitDecalage;

	/**
	 * Prem mois.
	 *
	 * @var DateTime
	 */
	private $premMois;

	/**
	 * Raison sociale.
	 *
	 * @var string
	 */
	private $raisonSociale;

	/**
	 * Recap ducs1.
	 *
	 * @var float
	 */
	private $recapDucs1;

	/**
	 * Recap ducs10.
	 *
	 * @var float
	 */
	private $recapDucs10;

	/**
	 * Recap ducs11.
	 *
	 * @var float
	 */
	private $recapDucs11;

	/**
	 * Recap ducs12.
	 *
	 * @var float
	 */
	private $recapDucs12;

	/**
	 * Recap ducs13.
	 *
	 * @var float
	 */
	private $recapDucs13;

	/**
	 * Recap ducs2.
	 *
	 * @var float
	 */
	private $recapDucs2;

	/**
	 * Recap ducs3.
	 *
	 * @var float
	 */
	private $recapDucs3;

	/**
	 * Recap ducs4.
	 *
	 * @var float
	 */
	private $recapDucs4;

	/**
	 * Recap ducs5.
	 *
	 * @var float
	 */
	private $recapDucs5;

	/**
	 * Recap ducs6.
	 *
	 * @var float
	 */
	private $recapDucs6;

	/**
	 * Recap ducs7.
	 *
	 * @var float
	 */
	private $recapDucs7;

	/**
	 * Recap ducs8.
	 *
	 * @var float
	 */
	private $recapDucs8;

	/**
	 * Recap ducs9.
	 *
	 * @var float
	 */
	private $recapDucs9;

	/**
	 * Regul ducs.
	 *
	 * @var float
	 */
	private $regulDucs;

	/**
	 * Rib.
	 *
	 * @var string
	 */
	private $rib;

	/**
	 * Sous type organisme.
	 *
	 * @var string
	 */
	private $sousTypeOrganisme;

	/**
	 * Traiter edi.
	 *
	 * @var boolean
	 */
	private $traiterEdi;

	/**
	 * Type organisme.
	 *
	 * @var string
	 */
	private $typeOrganisme;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the a editer ducs.
	 *
	 * @return boolean Returns the a editer ducs.
	 */
	public function getAEditerDucs() {
		return $this->aEditerDucs;
	}

	/**
	 * Get the acompte.
	 *
	 * @return float Returns the acompte.
	 */
	public function getAcompte() {
		return $this->acompte;
	}

	/**
	 * Get the arrondi base.
	 *
	 * @return string Returns the arrondi base.
	 */
	public function getArrondiBase() {
		return $this->arrondiBase;
	}

	/**
	 * Get the arrondi cotis.
	 *
	 * @return string Returns the arrondi cotis.
	 */
	public function getArrondiCotis() {
		return $this->arrondiCotis;
	}

	/**
	 * Get the code centre.
	 *
	 * @return string Returns the code centre.
	 */
	public function getCodeCentre() {
		return $this->codeCentre;
	}

	/**
	 * Get the code etablissement.
	 *
	 * @return int Returns the code etablissement.
	 */
	public function getCodeEtablissement() {
		return $this->codeEtablissement;
	}

	/**
	 * Get the date reglement.
	 *
	 * @return DateTime Returns the date reglement.
	 */
	public function getDateReglement() {
		return $this->dateReglement;
	}

	/**
	 * Get the date verse salaire.
	 *
	 * @return DateTime Returns the date verse salaire.
	 */
	public function getDateVerseSalaire() {
		return $this->dateVerseSalaire;
	}

	/**
	 * Get the ducs euro.
	 *
	 * @return boolean Returns the ducs euro.
	 */
	public function getDucsEuro() {
		return $this->ducsEuro;
	}

	/**
	 * Get the effectif inscrit.
	 *
	 * @return int Returns the effectif inscrit.
	 */
	public function getEffectifInscrit() {
		return $this->effectifInscrit;
	}

	/**
	 * Get the effectif moyen.
	 *
	 * @return float Returns the effectif moyen.
	 */
	public function getEffectifMoyen() {
		return $this->effectifMoyen;
	}

	/**
	 * Get the effectif paye.
	 *
	 * @return int Returns the effectif paye.
	 */
	public function getEffectifPaye() {
		return $this->effectifPaye;
	}

	/**
	 * Get the fin per.
	 *
	 * @return DateTime Returns the fin per.
	 */
	public function getFinPer() {
		return $this->finPer;
	}

	/**
	 * Get the grand decalage.
	 *
	 * @return boolean Returns the grand decalage.
	 */
	public function getGrandDecalage() {
		return $this->grandDecalage;
	}

	/**
	 * Get the lien document.
	 *
	 * @return string Returns the lien document.
	 */
	public function getLienDocument() {
		return $this->lienDocument;
	}

	/**
	 * Get the methode calcul c i c e h e.
	 *
	 * @return string Returns the methode calcul c i c e h e.
	 */
	public function getMethodeCalculCICEHE() {
		return $this->methodeCalculCICEHE;
	}

	/**
	 * Get the montant total.
	 *
	 * @return float Returns the montant total.
	 */
	public function getMontantTotal() {
		return $this->montantTotal;
	}

	/**
	 * Get the motif ecart eff.
	 *
	 * @return string Returns the motif ecart eff.
	 */
	public function getMotifEcartEff() {
		return $this->motifEcartEff;
	}

	/**
	 * Get the mt aide ct aides.
	 *
	 * @return float Returns the mt aide ct aides.
	 */
	public function getMtAideCtAides() {
		return $this->mtAideCtAides;
	}

	/**
	 * Get the mt brut d a d s.
	 *
	 * @return float Returns the mt brut d a d s.
	 */
	public function getMtBrutDADS() {
		return $this->mtBrutDADS;
	}

	/**
	 * Get the mt regul l o d e o m.
	 *
	 * @return float Returns the mt regul l o d e o m.
	 */
	public function getMtRegulLODEOM() {
		return $this->mtRegulLODEOM;
	}

	/**
	 * Get the nb autres.
	 *
	 * @return float Returns the nb autres.
	 */
	public function getNbAutres() {
		return $this->nbAutres;
	}

	/**
	 * Get the nb femmes.
	 *
	 * @return float Returns the nb femmes.
	 */
	public function getNbFemmes() {
		return $this->nbFemmes;
	}

	/**
	 * Get the nb fin contrat.
	 *
	 * @return float Returns the nb fin contrat.
	 */
	public function getNbFinContrat() {
		return $this->nbFinContrat;
	}

	/**
	 * Get the nb hommes.
	 *
	 * @return float Returns the nb hommes.
	 */
	public function getNbHommes() {
		return $this->nbHommes;
	}

	/**
	 * Get the no affiliation.
	 *
	 * @return string Returns the no affiliation.
	 */
	public function getNoAffiliation() {
		return $this->noAffiliation;
	}

	/**
	 * Get the organisme.
	 *
	 * @return string Returns the organisme.
	 */
	public function getOrganisme() {
		return $this->organisme;
	}

	/**
	 * Get the paie decalee.
	 *
	 * @return boolean Returns the paie decalee.
	 */
	public function getPaieDecalee() {
		return $this->paieDecalee;
	}

	/**
	 * Get the per deb c i c e.
	 *
	 * @return DateTime Returns the per deb c i c e.
	 */
	public function getPerDebCICE() {
		return $this->perDebCICE;
	}

	/**
	 * Get the per fin c i c e.
	 *
	 * @return DateTime Returns the per fin c i c e.
	 */
	public function getPerFinCICE() {
		return $this->perFinCICE;
	}

	/**
	 * Get the periode.
	 *
	 * @return string Returns the periode.
	 */
	public function getPeriode() {
		return $this->periode;
	}

	/**
	 * Get the periode decla.
	 *
	 * @return DateTime Returns the periode decla.
	 */
	public function getPeriodeDecla() {
		return $this->periodeDecla;
	}

	/**
	 * Get the petit decalage.
	 *
	 * @return boolean Returns the petit decalage.
	 */
	public function getPetitDecalage() {
		return $this->petitDecalage;
	}

	/**
	 * Get the prem mois.
	 *
	 * @return DateTime Returns the prem mois.
	 */
	public function getPremMois() {
		return $this->premMois;
	}

	/**
	 * Get the raison sociale.
	 *
	 * @return string Returns the raison sociale.
	 */
	public function getRaisonSociale() {
		return $this->raisonSociale;
	}

	/**
	 * Get the recap ducs1.
	 *
	 * @return float Returns the recap ducs1.
	 */
	public function getRecapDucs1() {
		return $this->recapDucs1;
	}

	/**
	 * Get the recap ducs10.
	 *
	 * @return float Returns the recap ducs10.
	 */
	public function getRecapDucs10() {
		return $this->recapDucs10;
	}

	/**
	 * Get the recap ducs11.
	 *
	 * @return float Returns the recap ducs11.
	 */
	public function getRecapDucs11() {
		return $this->recapDucs11;
	}

	/**
	 * Get the recap ducs12.
	 *
	 * @return float Returns the recap ducs12.
	 */
	public function getRecapDucs12() {
		return $this->recapDucs12;
	}

	/**
	 * Get the recap ducs13.
	 *
	 * @return float Returns the recap ducs13.
	 */
	public function getRecapDucs13() {
		return $this->recapDucs13;
	}

	/**
	 * Get the recap ducs2.
	 *
	 * @return float Returns the recap ducs2.
	 */
	public function getRecapDucs2() {
		return $this->recapDucs2;
	}

	/**
	 * Get the recap ducs3.
	 *
	 * @return float Returns the recap ducs3.
	 */
	public function getRecapDucs3() {
		return $this->recapDucs3;
	}

	/**
	 * Get the recap ducs4.
	 *
	 * @return float Returns the recap ducs4.
	 */
	public function getRecapDucs4() {
		return $this->recapDucs4;
	}

	/**
	 * Get the recap ducs5.
	 *
	 * @return float Returns the recap ducs5.
	 */
	public function getRecapDucs5() {
		return $this->recapDucs5;
	}

	/**
	 * Get the recap ducs6.
	 *
	 * @return float Returns the recap ducs6.
	 */
	public function getRecapDucs6() {
		return $this->recapDucs6;
	}

	/**
	 * Get the recap ducs7.
	 *
	 * @return float Returns the recap ducs7.
	 */
	public function getRecapDucs7() {
		return $this->recapDucs7;
	}

	/**
	 * Get the recap ducs8.
	 *
	 * @return float Returns the recap ducs8.
	 */
	public function getRecapDucs8() {
		return $this->recapDucs8;
	}

	/**
	 * Get the recap ducs9.
	 *
	 * @return float Returns the recap ducs9.
	 */
	public function getRecapDucs9() {
		return $this->recapDucs9;
	}

	/**
	 * Get the regul ducs.
	 *
	 * @return float Returns the regul ducs.
	 */
	public function getRegulDucs() {
		return $this->regulDucs;
	}

	/**
	 * Get the rib.
	 *
	 * @return string Returns the rib.
	 */
	public function getRib() {
		return $this->rib;
	}

	/**
	 * Get the sous type organisme.
	 *
	 * @return string Returns the sous type organisme.
	 */
	public function getSousTypeOrganisme() {
		return $this->sousTypeOrganisme;
	}

	/**
	 * Get the traiter edi.
	 *
	 * @return boolean Returns the traiter edi.
	 */
	public function getTraiterEdi() {
		return $this->traiterEdi;
	}

	/**
	 * Get the type organisme.
	 *
	 * @return string Returns the type organisme.
	 */
	public function getTypeOrganisme() {
		return $this->typeOrganisme;
	}

	/**
	 * Set the a editer ducs.
	 *
	 * @param boolean $aEditerDucs The a editer ducs.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setAEditerDucs($aEditerDucs) {
		$this->aEditerDucs = $aEditerDucs;
		return $this;
	}

	/**
	 * Set the acompte.
	 *
	 * @param float $acompte The acompte.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setAcompte($acompte) {
		$this->acompte = $acompte;
		return $this;
	}

	/**
	 * Set the arrondi base.
	 *
	 * @param string $arrondiBase The arrondi base.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setArrondiBase($arrondiBase) {
		$this->arrondiBase = $arrondiBase;
		return $this;
	}

	/**
	 * Set the arrondi cotis.
	 *
	 * @param string $arrondiCotis The arrondi cotis.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setArrondiCotis($arrondiCotis) {
		$this->arrondiCotis = $arrondiCotis;
		return $this;
	}

	/**
	 * Set the code centre.
	 *
	 * @param string $codeCentre The code centre.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setCodeCentre($codeCentre) {
		$this->codeCentre = $codeCentre;
		return $this;
	}

	/**
	 * Set the code etablissement.
	 *
	 * @param int $codeEtablissement The code etablissement.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setCodeEtablissement($codeEtablissement) {
		$this->codeEtablissement = $codeEtablissement;
		return $this;
	}

	/**
	 * Set the date reglement.
	 *
	 * @param DateTime $dateReglement The date reglement.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setDateReglement(DateTime $dateReglement = null) {
		$this->dateReglement = $dateReglement;
		return $this;
	}

	/**
	 * Set the date verse salaire.
	 *
	 * @param DateTime $dateVerseSalaire The date verse salaire.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setDateVerseSalaire(DateTime $dateVerseSalaire = null) {
		$this->dateVerseSalaire = $dateVerseSalaire;
		return $this;
	}

	/**
	 * Set the ducs euro.
	 *
	 * @param boolean $ducsEuro The ducs euro.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setDucsEuro($ducsEuro) {
		$this->ducsEuro = $ducsEuro;
		return $this;
	}

	/**
	 * Set the effectif inscrit.
	 *
	 * @param int $effectifInscrit The effectif inscrit.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setEffectifInscrit($effectifInscrit) {
		$this->effectifInscrit = $effectifInscrit;
		return $this;
	}

	/**
	 * Set the effectif moyen.
	 *
	 * @param float $effectifMoyen The effectif moyen.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setEffectifMoyen($effectifMoyen) {
		$this->effectifMoyen = $effectifMoyen;
		return $this;
	}

	/**
	 * Set the effectif paye.
	 *
	 * @param int $effectifPaye The effectif paye.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setEffectifPaye($effectifPaye) {
		$this->effectifPaye = $effectifPaye;
		return $this;
	}

	/**
	 * Set the fin per.
	 *
	 * @param DateTime $finPer The fin per.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setFinPer(DateTime $finPer = null) {
		$this->finPer = $finPer;
		return $this;
	}

	/**
	 * Set the grand decalage.
	 *
	 * @param boolean $grandDecalage The grand decalage.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setGrandDecalage($grandDecalage) {
		$this->grandDecalage = $grandDecalage;
		return $this;
	}

	/**
	 * Set the lien document.
	 *
	 * @param string $lienDocument The lien document.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setLienDocument($lienDocument) {
		$this->lienDocument = $lienDocument;
		return $this;
	}

	/**
	 * Set the methode calcul c i c e h e.
	 *
	 * @param string $methodeCalculCICEHE The methode calcul c i c e h e.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setMethodeCalculCICEHE($methodeCalculCICEHE) {
		$this->methodeCalculCICEHE = $methodeCalculCICEHE;
		return $this;
	}

	/**
	 * Set the montant total.
	 *
	 * @param float $montantTotal The montant total.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setMontantTotal($montantTotal) {
		$this->montantTotal = $montantTotal;
		return $this;
	}

	/**
	 * Set the motif ecart eff.
	 *
	 * @param string $motifEcartEff The motif ecart eff.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setMotifEcartEff($motifEcartEff) {
		$this->motifEcartEff = $motifEcartEff;
		return $this;
	}

	/**
	 * Set the mt aide ct aides.
	 *
	 * @param float $mtAideCtAides The mt aide ct aides.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setMtAideCtAides($mtAideCtAides) {
		$this->mtAideCtAides = $mtAideCtAides;
		return $this;
	}

	/**
	 * Set the mt brut d a d s.
	 *
	 * @param float $mtBrutDADS The mt brut d a d s.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setMtBrutDADS($mtBrutDADS) {
		$this->mtBrutDADS = $mtBrutDADS;
		return $this;
	}

	/**
	 * Set the mt regul l o d e o m.
	 *
	 * @param float $mtRegulLODEOM The mt regul l o d e o m.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setMtRegulLODEOM($mtRegulLODEOM) {
		$this->mtRegulLODEOM = $mtRegulLODEOM;
		return $this;
	}

	/**
	 * Set the nb autres.
	 *
	 * @param float $nbAutres The nb autres.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setNbAutres($nbAutres) {
		$this->nbAutres = $nbAutres;
		return $this;
	}

	/**
	 * Set the nb femmes.
	 *
	 * @param float $nbFemmes The nb femmes.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setNbFemmes($nbFemmes) {
		$this->nbFemmes = $nbFemmes;
		return $this;
	}

	/**
	 * Set the nb fin contrat.
	 *
	 * @param float $nbFinContrat The nb fin contrat.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setNbFinContrat($nbFinContrat) {
		$this->nbFinContrat = $nbFinContrat;
		return $this;
	}

	/**
	 * Set the nb hommes.
	 *
	 * @param float $nbHommes The nb hommes.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setNbHommes($nbHommes) {
		$this->nbHommes = $nbHommes;
		return $this;
	}

	/**
	 * Set the no affiliation.
	 *
	 * @param string $noAffiliation The no affiliation.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setNoAffiliation($noAffiliation) {
		$this->noAffiliation = $noAffiliation;
		return $this;
	}

	/**
	 * Set the organisme.
	 *
	 * @param string $organisme The organisme.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setOrganisme($organisme) {
		$this->organisme = $organisme;
		return $this;
	}

	/**
	 * Set the paie decalee.
	 *
	 * @param boolean $paieDecalee The paie decalee.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setPaieDecalee($paieDecalee) {
		$this->paieDecalee = $paieDecalee;
		return $this;
	}

	/**
	 * Set the per deb c i c e.
	 *
	 * @param DateTime $perDebCICE The per deb c i c e.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setPerDebCICE(DateTime $perDebCICE = null) {
		$this->perDebCICE = $perDebCICE;
		return $this;
	}

	/**
	 * Set the per fin c i c e.
	 *
	 * @param DateTime $perFinCICE The per fin c i c e.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setPerFinCICE(DateTime $perFinCICE = null) {
		$this->perFinCICE = $perFinCICE;
		return $this;
	}

	/**
	 * Set the periode.
	 *
	 * @param string $periode The periode.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setPeriode($periode) {
		$this->periode = $periode;
		return $this;
	}

	/**
	 * Set the periode decla.
	 *
	 * @param DateTime $periodeDecla The periode decla.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setPeriodeDecla(DateTime $periodeDecla = null) {
		$this->periodeDecla = $periodeDecla;
		return $this;
	}

	/**
	 * Set the petit decalage.
	 *
	 * @param boolean $petitDecalage The petit decalage.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setPetitDecalage($petitDecalage) {
		$this->petitDecalage = $petitDecalage;
		return $this;
	}

	/**
	 * Set the prem mois.
	 *
	 * @param DateTime $premMois The prem mois.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setPremMois(DateTime $premMois = null) {
		$this->premMois = $premMois;
		return $this;
	}

	/**
	 * Set the raison sociale.
	 *
	 * @param string $raisonSociale The raison sociale.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setRaisonSociale($raisonSociale) {
		$this->raisonSociale = $raisonSociale;
		return $this;
	}

	/**
	 * Set the recap ducs1.
	 *
	 * @param float $recapDucs1 The recap ducs1.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setRecapDucs1($recapDucs1) {
		$this->recapDucs1 = $recapDucs1;
		return $this;
	}

	/**
	 * Set the recap ducs10.
	 *
	 * @param float $recapDucs10 The recap ducs10.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setRecapDucs10($recapDucs10) {
		$this->recapDucs10 = $recapDucs10;
		return $this;
	}

	/**
	 * Set the recap ducs11.
	 *
	 * @param float $recapDucs11 The recap ducs11.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setRecapDucs11($recapDucs11) {
		$this->recapDucs11 = $recapDucs11;
		return $this;
	}

	/**
	 * Set the recap ducs12.
	 *
	 * @param float $recapDucs12 The recap ducs12.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setRecapDucs12($recapDucs12) {
		$this->recapDucs12 = $recapDucs12;
		return $this;
	}

	/**
	 * Set the recap ducs13.
	 *
	 * @param float $recapDucs13 The recap ducs13.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setRecapDucs13($recapDucs13) {
		$this->recapDucs13 = $recapDucs13;
		return $this;
	}

	/**
	 * Set the recap ducs2.
	 *
	 * @param float $recapDucs2 The recap ducs2.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setRecapDucs2($recapDucs2) {
		$this->recapDucs2 = $recapDucs2;
		return $this;
	}

	/**
	 * Set the recap ducs3.
	 *
	 * @param float $recapDucs3 The recap ducs3.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setRecapDucs3($recapDucs3) {
		$this->recapDucs3 = $recapDucs3;
		return $this;
	}

	/**
	 * Set the recap ducs4.
	 *
	 * @param float $recapDucs4 The recap ducs4.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setRecapDucs4($recapDucs4) {
		$this->recapDucs4 = $recapDucs4;
		return $this;
	}

	/**
	 * Set the recap ducs5.
	 *
	 * @param float $recapDucs5 The recap ducs5.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setRecapDucs5($recapDucs5) {
		$this->recapDucs5 = $recapDucs5;
		return $this;
	}

	/**
	 * Set the recap ducs6.
	 *
	 * @param float $recapDucs6 The recap ducs6.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setRecapDucs6($recapDucs6) {
		$this->recapDucs6 = $recapDucs6;
		return $this;
	}

	/**
	 * Set the recap ducs7.
	 *
	 * @param float $recapDucs7 The recap ducs7.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setRecapDucs7($recapDucs7) {
		$this->recapDucs7 = $recapDucs7;
		return $this;
	}

	/**
	 * Set the recap ducs8.
	 *
	 * @param float $recapDucs8 The recap ducs8.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setRecapDucs8($recapDucs8) {
		$this->recapDucs8 = $recapDucs8;
		return $this;
	}

	/**
	 * Set the recap ducs9.
	 *
	 * @param float $recapDucs9 The recap ducs9.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setRecapDucs9($recapDucs9) {
		$this->recapDucs9 = $recapDucs9;
		return $this;
	}

	/**
	 * Set the regul ducs.
	 *
	 * @param float $regulDucs The regul ducs.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setRegulDucs($regulDucs) {
		$this->regulDucs = $regulDucs;
		return $this;
	}

	/**
	 * Set the rib.
	 *
	 * @param string $rib The rib.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setRib($rib) {
		$this->rib = $rib;
		return $this;
	}

	/**
	 * Set the sous type organisme.
	 *
	 * @param string $sousTypeOrganisme The sous type organisme.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setSousTypeOrganisme($sousTypeOrganisme) {
		$this->sousTypeOrganisme = $sousTypeOrganisme;
		return $this;
	}

	/**
	 * Set the traiter edi.
	 *
	 * @param boolean $traiterEdi The traiter edi.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setTraiterEdi($traiterEdi) {
		$this->traiterEdi = $traiterEdi;
		return $this;
	}

	/**
	 * Set the type organisme.
	 *
	 * @param string $typeOrganisme The type organisme.
	 * @return RecapDUCSAnnuelle Returns this recap d u c s annuelle.
	 */
	public function setTypeOrganisme($typeOrganisme) {
		$this->typeOrganisme = $typeOrganisme;
		return $this;
	}

}
