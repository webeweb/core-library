<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

use DateTime;

/**
 * Recap lignes d u c s model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class RecapLignesDUCS {

    /**
     * A editer ducs.
     *
     * @var bool
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
     * @var bool
     */
    private $ducsEuro;

    /**
     * Effectif inscrit.
     *
     * @var int
     */
    private $effectifInscrit;

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
     * @var bool
     */
    private $grandDecalage;

    /**
     * Lien document.
     *
     * @var string
     */
    private $lienDocument;

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
     * @var bool
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
     * @var bool
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
     * @var bool
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
     * @return bool Returns the a editer ducs.
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
     * @return bool Returns the ducs euro.
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
     * @return bool Returns the grand decalage.
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
     * @return bool Returns the paie decalee.
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
     * @return bool Returns the petit decalage.
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
     * @return bool Returns the traiter edi.
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
     * @param bool $aEditerDucs The a editer ducs.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setAEditerDucs($aEditerDucs) {
        $this->aEditerDucs = $aEditerDucs;
        return $this;
    }

    /**
     * Set the acompte.
     *
     * @param float $acompte The acompte.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setAcompte($acompte) {
        $this->acompte = $acompte;
        return $this;
    }

    /**
     * Set the arrondi base.
     *
     * @param string $arrondiBase The arrondi base.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setArrondiBase($arrondiBase) {
        $this->arrondiBase = $arrondiBase;
        return $this;
    }

    /**
     * Set the arrondi cotis.
     *
     * @param string $arrondiCotis The arrondi cotis.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setArrondiCotis($arrondiCotis) {
        $this->arrondiCotis = $arrondiCotis;
        return $this;
    }

    /**
     * Set the code centre.
     *
     * @param string $codeCentre The code centre.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setCodeCentre($codeCentre) {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the date reglement.
     *
     * @param DateTime $dateReglement The date reglement.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setDateReglement(DateTime $dateReglement = null) {
        $this->dateReglement = $dateReglement;
        return $this;
    }

    /**
     * Set the date verse salaire.
     *
     * @param DateTime $dateVerseSalaire The date verse salaire.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setDateVerseSalaire(DateTime $dateVerseSalaire = null) {
        $this->dateVerseSalaire = $dateVerseSalaire;
        return $this;
    }

    /**
     * Set the ducs euro.
     *
     * @param bool $ducsEuro The ducs euro.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setDucsEuro($ducsEuro) {
        $this->ducsEuro = $ducsEuro;
        return $this;
    }

    /**
     * Set the effectif inscrit.
     *
     * @param int $effectifInscrit The effectif inscrit.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setEffectifInscrit($effectifInscrit) {
        $this->effectifInscrit = $effectifInscrit;
        return $this;
    }

    /**
     * Set the effectif paye.
     *
     * @param int $effectifPaye The effectif paye.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setEffectifPaye($effectifPaye) {
        $this->effectifPaye = $effectifPaye;
        return $this;
    }

    /**
     * Set the fin per.
     *
     * @param DateTime $finPer The fin per.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setFinPer(DateTime $finPer = null) {
        $this->finPer = $finPer;
        return $this;
    }

    /**
     * Set the grand decalage.
     *
     * @param bool $grandDecalage The grand decalage.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setGrandDecalage($grandDecalage) {
        $this->grandDecalage = $grandDecalage;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string $lienDocument The lien document.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setLienDocument($lienDocument) {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the montant total.
     *
     * @param float $montantTotal The montant total.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setMontantTotal($montantTotal) {
        $this->montantTotal = $montantTotal;
        return $this;
    }

    /**
     * Set the motif ecart eff.
     *
     * @param string $motifEcartEff The motif ecart eff.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setMotifEcartEff($motifEcartEff) {
        $this->motifEcartEff = $motifEcartEff;
        return $this;
    }

    /**
     * Set the nb autres.
     *
     * @param float $nbAutres The nb autres.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setNbAutres($nbAutres) {
        $this->nbAutres = $nbAutres;
        return $this;
    }

    /**
     * Set the nb femmes.
     *
     * @param float $nbFemmes The nb femmes.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setNbFemmes($nbFemmes) {
        $this->nbFemmes = $nbFemmes;
        return $this;
    }

    /**
     * Set the nb fin contrat.
     *
     * @param float $nbFinContrat The nb fin contrat.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setNbFinContrat($nbFinContrat) {
        $this->nbFinContrat = $nbFinContrat;
        return $this;
    }

    /**
     * Set the nb hommes.
     *
     * @param float $nbHommes The nb hommes.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setNbHommes($nbHommes) {
        $this->nbHommes = $nbHommes;
        return $this;
    }

    /**
     * Set the no affiliation.
     *
     * @param string $noAffiliation The no affiliation.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setNoAffiliation($noAffiliation) {
        $this->noAffiliation = $noAffiliation;
        return $this;
    }

    /**
     * Set the organisme.
     *
     * @param string $organisme The organisme.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setOrganisme($organisme) {
        $this->organisme = $organisme;
        return $this;
    }

    /**
     * Set the paie decalee.
     *
     * @param bool $paieDecalee The paie decalee.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setPaieDecalee($paieDecalee) {
        $this->paieDecalee = $paieDecalee;
        return $this;
    }

    /**
     * Set the per deb c i c e.
     *
     * @param DateTime $perDebCICE The per deb c i c e.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setPerDebCICE(DateTime $perDebCICE = null) {
        $this->perDebCICE = $perDebCICE;
        return $this;
    }

    /**
     * Set the per fin c i c e.
     *
     * @param DateTime $perFinCICE The per fin c i c e.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setPerFinCICE(DateTime $perFinCICE = null) {
        $this->perFinCICE = $perFinCICE;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param string $periode The periode.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setPeriode($periode) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the periode decla.
     *
     * @param DateTime $periodeDecla The periode decla.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setPeriodeDecla(DateTime $periodeDecla = null) {
        $this->periodeDecla = $periodeDecla;
        return $this;
    }

    /**
     * Set the petit decalage.
     *
     * @param bool $petitDecalage The petit decalage.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setPetitDecalage($petitDecalage) {
        $this->petitDecalage = $petitDecalage;
        return $this;
    }

    /**
     * Set the prem mois.
     *
     * @param DateTime $premMois The prem mois.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setPremMois(DateTime $premMois = null) {
        $this->premMois = $premMois;
        return $this;
    }

    /**
     * Set the raison sociale.
     *
     * @param string $raisonSociale The raison sociale.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setRaisonSociale($raisonSociale) {
        $this->raisonSociale = $raisonSociale;
        return $this;
    }

    /**
     * Set the regul ducs.
     *
     * @param float $regulDucs The regul ducs.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setRegulDucs($regulDucs) {
        $this->regulDucs = $regulDucs;
        return $this;
    }

    /**
     * Set the rib.
     *
     * @param string $rib The rib.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setRib($rib) {
        $this->rib = $rib;
        return $this;
    }

    /**
     * Set the sous type organisme.
     *
     * @param string $sousTypeOrganisme The sous type organisme.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setSousTypeOrganisme($sousTypeOrganisme) {
        $this->sousTypeOrganisme = $sousTypeOrganisme;
        return $this;
    }

    /**
     * Set the traiter edi.
     *
     * @param bool $traiterEdi The traiter edi.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setTraiterEdi($traiterEdi) {
        $this->traiterEdi = $traiterEdi;
        return $this;
    }

    /**
     * Set the type organisme.
     *
     * @param string $typeOrganisme The type organisme.
     * @return RecapLignesDUCS Returns this recap lignes d u c s.
     */
    public function setTypeOrganisme($typeOrganisme) {
        $this->typeOrganisme = $typeOrganisme;
        return $this;
    }
}
