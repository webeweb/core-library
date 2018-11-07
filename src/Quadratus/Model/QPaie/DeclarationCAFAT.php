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
 * Declaration c a f a t model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class DeclarationCAFAT {

    /**
     * Adresse1.
     *
     * @var string
     */
    private $adresse1;

    /**
     * Adresse2.
     *
     * @var string
     */
    private $adresse2;

    /**
     * Adresse3.
     *
     * @var string
     */
    private $adresse3;

    /**
     * Code cotis.
     *
     * @var string
     */
    private $codeCotis;

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Date declaration.
     *
     * @var DateTime
     */
    private $dateDeclaration;

    /**
     * Lien document.
     *
     * @var string
     */
    private $lienDocument;

    /**
     * Mt autre deduction.
     *
     * @var float
     */
    private $mtAutreDeduction;

    /**
     * Mt deduction acompte.
     *
     * @var float
     */
    private $mtDeductionAcompte;

    /**
     * Mt deduction acompte1.
     *
     * @var float
     */
    private $mtDeductionAcompte1;

    /**
     * Mt deduction acompte2.
     *
     * @var float
     */
    private $mtDeductionAcompte2;

    /**
     * Nb salaries.
     *
     * @var int
     */
    private $nbSalaries;

    /**
     * No cotisant.
     *
     * @var string
     */
    private $noCotisant;

    /**
     * Organisme.
     *
     * @var string
     */
    private $organisme;

    /**
     * Pas de personnel.
     *
     * @var boolean
     */
    private $pasDePersonnel;

    /**
     * Pas de reembauche.
     *
     * @var boolean
     */
    private $pasDeReembauche;

    /**
     * Periode decla.
     *
     * @var DateTime
     */
    private $periodeDecla;

    /**
     * Plafond1 r u a m m tr2.
     *
     * @var float
     */
    private $plafond1RUAMMTr2;

    /**
     * Plafond2 r u a m m tr2.
     *
     * @var float
     */
    private $plafond2RUAMMTr2;

    /**
     * Plafond autre regime.
     *
     * @var float
     */
    private $plafondAutreRegime;

    /**
     * Plafond f s h.
     *
     * @var float
     */
    private $plafondFSH;

    /**
     * Plafond maladie.
     *
     * @var float
     */
    private $plafondMaladie;

    /**
     * Plafond salaire.
     *
     * @var float
     */
    private $plafondSalaire;

    /**
     * R i d.
     *
     * @var string
     */
    private $rID;

    /**
     * Raison sociale.
     *
     * @var string
     */
    private $raisonSociale;

    /**
     * Secteur.
     *
     * @var string
     */
    private $secteur;

    /**
     * Taux a t.
     *
     * @var float
     */
    private $tauxAT;

    /**
     * Taux autre regime.
     *
     * @var float
     */
    private $tauxAutreRegime;

    /**
     * Taux c c s.
     *
     * @var float
     */
    private $tauxCCS;

    /**
     * Taux f s h.
     *
     * @var float
     */
    private $tauxFSH;

    /**
     * Taux maladie.
     *
     * @var float
     */
    private $tauxMaladie;

    /**
     * Taux r u a m m tr2.
     *
     * @var float
     */
    private $tauxRUAMMTr2;

    /**
     * Total cotis autre regime.
     *
     * @var float
     */
    private $totalCotisAutreRegime;

    /**
     * Total cotis c c s.
     *
     * @var float
     */
    private $totalCotisCCS;

    /**
     * Total cotis f s h.
     *
     * @var float
     */
    private $totalCotisFSH;

    /**
     * Total cotis maladie.
     *
     * @var float
     */
    private $totalCotisMaladie;

    /**
     * Total cotis r u a m m tr2.
     *
     * @var float
     */
    private $totalCotisRUAMMTr2;

    /**
     * Total r u a m m tr2.
     *
     * @var float
     */
    private $totalRUAMMTr2;

    /**
     * Total remuneration.
     *
     * @var int
     */
    private $totalRemuneration;

    /**
     * Total salaire autre regime.
     *
     * @var float
     */
    private $totalSalaireAutreRegime;

    /**
     * Total salaire c c s.
     *
     * @var float
     */
    private $totalSalaireCCS;

    /**
     * Total salaire f s h.
     *
     * @var float
     */
    private $totalSalaireFSH;

    /**
     * Total salaire maladie.
     *
     * @var float
     */
    private $totalSalaireMaladie;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the adresse1.
     *
     * @return string Returns the adresse1.
     */
    public function getAdresse1() {
        return $this->adresse1;
    }

    /**
     * Get the adresse2.
     *
     * @return string Returns the adresse2.
     */
    public function getAdresse2() {
        return $this->adresse2;
    }

    /**
     * Get the adresse3.
     *
     * @return string Returns the adresse3.
     */
    public function getAdresse3() {
        return $this->adresse3;
    }

    /**
     * Get the code cotis.
     *
     * @return string Returns the code cotis.
     */
    public function getCodeCotis() {
        return $this->codeCotis;
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
     * Get the date declaration.
     *
     * @return DateTime Returns the date declaration.
     */
    public function getDateDeclaration() {
        return $this->dateDeclaration;
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
     * Get the mt autre deduction.
     *
     * @return float Returns the mt autre deduction.
     */
    public function getMtAutreDeduction() {
        return $this->mtAutreDeduction;
    }

    /**
     * Get the mt deduction acompte.
     *
     * @return float Returns the mt deduction acompte.
     */
    public function getMtDeductionAcompte() {
        return $this->mtDeductionAcompte;
    }

    /**
     * Get the mt deduction acompte1.
     *
     * @return float Returns the mt deduction acompte1.
     */
    public function getMtDeductionAcompte1() {
        return $this->mtDeductionAcompte1;
    }

    /**
     * Get the mt deduction acompte2.
     *
     * @return float Returns the mt deduction acompte2.
     */
    public function getMtDeductionAcompte2() {
        return $this->mtDeductionAcompte2;
    }

    /**
     * Get the nb salaries.
     *
     * @return int Returns the nb salaries.
     */
    public function getNbSalaries() {
        return $this->nbSalaries;
    }

    /**
     * Get the no cotisant.
     *
     * @return string Returns the no cotisant.
     */
    public function getNoCotisant() {
        return $this->noCotisant;
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
     * Get the pas de personnel.
     *
     * @return boolean Returns the pas de personnel.
     */
    public function getPasDePersonnel() {
        return $this->pasDePersonnel;
    }

    /**
     * Get the pas de reembauche.
     *
     * @return boolean Returns the pas de reembauche.
     */
    public function getPasDeReembauche() {
        return $this->pasDeReembauche;
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
     * Get the plafond1 r u a m m tr2.
     *
     * @return float Returns the plafond1 r u a m m tr2.
     */
    public function getPlafond1RUAMMTr2() {
        return $this->plafond1RUAMMTr2;
    }

    /**
     * Get the plafond2 r u a m m tr2.
     *
     * @return float Returns the plafond2 r u a m m tr2.
     */
    public function getPlafond2RUAMMTr2() {
        return $this->plafond2RUAMMTr2;
    }

    /**
     * Get the plafond autre regime.
     *
     * @return float Returns the plafond autre regime.
     */
    public function getPlafondAutreRegime() {
        return $this->plafondAutreRegime;
    }

    /**
     * Get the plafond f s h.
     *
     * @return float Returns the plafond f s h.
     */
    public function getPlafondFSH() {
        return $this->plafondFSH;
    }

    /**
     * Get the plafond maladie.
     *
     * @return float Returns the plafond maladie.
     */
    public function getPlafondMaladie() {
        return $this->plafondMaladie;
    }

    /**
     * Get the plafond salaire.
     *
     * @return float Returns the plafond salaire.
     */
    public function getPlafondSalaire() {
        return $this->plafondSalaire;
    }

    /**
     * Get the r i d.
     *
     * @return string Returns the r i d.
     */
    public function getRID() {
        return $this->rID;
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
     * Get the secteur.
     *
     * @return string Returns the secteur.
     */
    public function getSecteur() {
        return $this->secteur;
    }

    /**
     * Get the taux a t.
     *
     * @return float Returns the taux a t.
     */
    public function getTauxAT() {
        return $this->tauxAT;
    }

    /**
     * Get the taux autre regime.
     *
     * @return float Returns the taux autre regime.
     */
    public function getTauxAutreRegime() {
        return $this->tauxAutreRegime;
    }

    /**
     * Get the taux c c s.
     *
     * @return float Returns the taux c c s.
     */
    public function getTauxCCS() {
        return $this->tauxCCS;
    }

    /**
     * Get the taux f s h.
     *
     * @return float Returns the taux f s h.
     */
    public function getTauxFSH() {
        return $this->tauxFSH;
    }

    /**
     * Get the taux maladie.
     *
     * @return float Returns the taux maladie.
     */
    public function getTauxMaladie() {
        return $this->tauxMaladie;
    }

    /**
     * Get the taux r u a m m tr2.
     *
     * @return float Returns the taux r u a m m tr2.
     */
    public function getTauxRUAMMTr2() {
        return $this->tauxRUAMMTr2;
    }

    /**
     * Get the total cotis autre regime.
     *
     * @return float Returns the total cotis autre regime.
     */
    public function getTotalCotisAutreRegime() {
        return $this->totalCotisAutreRegime;
    }

    /**
     * Get the total cotis c c s.
     *
     * @return float Returns the total cotis c c s.
     */
    public function getTotalCotisCCS() {
        return $this->totalCotisCCS;
    }

    /**
     * Get the total cotis f s h.
     *
     * @return float Returns the total cotis f s h.
     */
    public function getTotalCotisFSH() {
        return $this->totalCotisFSH;
    }

    /**
     * Get the total cotis maladie.
     *
     * @return float Returns the total cotis maladie.
     */
    public function getTotalCotisMaladie() {
        return $this->totalCotisMaladie;
    }

    /**
     * Get the total cotis r u a m m tr2.
     *
     * @return float Returns the total cotis r u a m m tr2.
     */
    public function getTotalCotisRUAMMTr2() {
        return $this->totalCotisRUAMMTr2;
    }

    /**
     * Get the total r u a m m tr2.
     *
     * @return float Returns the total r u a m m tr2.
     */
    public function getTotalRUAMMTr2() {
        return $this->totalRUAMMTr2;
    }

    /**
     * Get the total remuneration.
     *
     * @return int Returns the total remuneration.
     */
    public function getTotalRemuneration() {
        return $this->totalRemuneration;
    }

    /**
     * Get the total salaire autre regime.
     *
     * @return float Returns the total salaire autre regime.
     */
    public function getTotalSalaireAutreRegime() {
        return $this->totalSalaireAutreRegime;
    }

    /**
     * Get the total salaire c c s.
     *
     * @return float Returns the total salaire c c s.
     */
    public function getTotalSalaireCCS() {
        return $this->totalSalaireCCS;
    }

    /**
     * Get the total salaire f s h.
     *
     * @return float Returns the total salaire f s h.
     */
    public function getTotalSalaireFSH() {
        return $this->totalSalaireFSH;
    }

    /**
     * Get the total salaire maladie.
     *
     * @return float Returns the total salaire maladie.
     */
    public function getTotalSalaireMaladie() {
        return $this->totalSalaireMaladie;
    }

    /**
     * Set the adresse1.
     *
     * @param string $adresse1 The adresse1.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setAdresse1($adresse1) {
        $this->adresse1 = $adresse1;
        return $this;
    }

    /**
     * Set the adresse2.
     *
     * @param string $adresse2 The adresse2.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setAdresse2($adresse2) {
        $this->adresse2 = $adresse2;
        return $this;
    }

    /**
     * Set the adresse3.
     *
     * @param string $adresse3 The adresse3.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setAdresse3($adresse3) {
        $this->adresse3 = $adresse3;
        return $this;
    }

    /**
     * Set the code cotis.
     *
     * @param string $codeCotis The code cotis.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setCodeCotis($codeCotis) {
        $this->codeCotis = $codeCotis;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the date declaration.
     *
     * @param DateTime $dateDeclaration The date declaration.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setDateDeclaration(DateTime $dateDeclaration = null) {
        $this->dateDeclaration = $dateDeclaration;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string $lienDocument The lien document.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setLienDocument($lienDocument) {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the mt autre deduction.
     *
     * @param float $mtAutreDeduction The mt autre deduction.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setMtAutreDeduction($mtAutreDeduction) {
        $this->mtAutreDeduction = $mtAutreDeduction;
        return $this;
    }

    /**
     * Set the mt deduction acompte.
     *
     * @param float $mtDeductionAcompte The mt deduction acompte.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setMtDeductionAcompte($mtDeductionAcompte) {
        $this->mtDeductionAcompte = $mtDeductionAcompte;
        return $this;
    }

    /**
     * Set the mt deduction acompte1.
     *
     * @param float $mtDeductionAcompte1 The mt deduction acompte1.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setMtDeductionAcompte1($mtDeductionAcompte1) {
        $this->mtDeductionAcompte1 = $mtDeductionAcompte1;
        return $this;
    }

    /**
     * Set the mt deduction acompte2.
     *
     * @param float $mtDeductionAcompte2 The mt deduction acompte2.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setMtDeductionAcompte2($mtDeductionAcompte2) {
        $this->mtDeductionAcompte2 = $mtDeductionAcompte2;
        return $this;
    }

    /**
     * Set the nb salaries.
     *
     * @param int $nbSalaries The nb salaries.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setNbSalaries($nbSalaries) {
        $this->nbSalaries = $nbSalaries;
        return $this;
    }

    /**
     * Set the no cotisant.
     *
     * @param string $noCotisant The no cotisant.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setNoCotisant($noCotisant) {
        $this->noCotisant = $noCotisant;
        return $this;
    }

    /**
     * Set the organisme.
     *
     * @param string $organisme The organisme.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setOrganisme($organisme) {
        $this->organisme = $organisme;
        return $this;
    }

    /**
     * Set the pas de personnel.
     *
     * @param boolean $pasDePersonnel The pas de personnel.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setPasDePersonnel($pasDePersonnel) {
        $this->pasDePersonnel = $pasDePersonnel;
        return $this;
    }

    /**
     * Set the pas de reembauche.
     *
     * @param boolean $pasDeReembauche The pas de reembauche.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setPasDeReembauche($pasDeReembauche) {
        $this->pasDeReembauche = $pasDeReembauche;
        return $this;
    }

    /**
     * Set the periode decla.
     *
     * @param DateTime $periodeDecla The periode decla.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setPeriodeDecla(DateTime $periodeDecla = null) {
        $this->periodeDecla = $periodeDecla;
        return $this;
    }

    /**
     * Set the plafond1 r u a m m tr2.
     *
     * @param float $plafond1RUAMMTr2 The plafond1 r u a m m tr2.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setPlafond1RUAMMTr2($plafond1RUAMMTr2) {
        $this->plafond1RUAMMTr2 = $plafond1RUAMMTr2;
        return $this;
    }

    /**
     * Set the plafond2 r u a m m tr2.
     *
     * @param float $plafond2RUAMMTr2 The plafond2 r u a m m tr2.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setPlafond2RUAMMTr2($plafond2RUAMMTr2) {
        $this->plafond2RUAMMTr2 = $plafond2RUAMMTr2;
        return $this;
    }

    /**
     * Set the plafond autre regime.
     *
     * @param float $plafondAutreRegime The plafond autre regime.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setPlafondAutreRegime($plafondAutreRegime) {
        $this->plafondAutreRegime = $plafondAutreRegime;
        return $this;
    }

    /**
     * Set the plafond f s h.
     *
     * @param float $plafondFSH The plafond f s h.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setPlafondFSH($plafondFSH) {
        $this->plafondFSH = $plafondFSH;
        return $this;
    }

    /**
     * Set the plafond maladie.
     *
     * @param float $plafondMaladie The plafond maladie.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setPlafondMaladie($plafondMaladie) {
        $this->plafondMaladie = $plafondMaladie;
        return $this;
    }

    /**
     * Set the plafond salaire.
     *
     * @param float $plafondSalaire The plafond salaire.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setPlafondSalaire($plafondSalaire) {
        $this->plafondSalaire = $plafondSalaire;
        return $this;
    }

    /**
     * Set the r i d.
     *
     * @param string $rID The r i d.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setRID($rID) {
        $this->rID = $rID;
        return $this;
    }

    /**
     * Set the raison sociale.
     *
     * @param string $raisonSociale The raison sociale.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setRaisonSociale($raisonSociale) {
        $this->raisonSociale = $raisonSociale;
        return $this;
    }

    /**
     * Set the secteur.
     *
     * @param string $secteur The secteur.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setSecteur($secteur) {
        $this->secteur = $secteur;
        return $this;
    }

    /**
     * Set the taux a t.
     *
     * @param float $tauxAT The taux a t.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setTauxAT($tauxAT) {
        $this->tauxAT = $tauxAT;
        return $this;
    }

    /**
     * Set the taux autre regime.
     *
     * @param float $tauxAutreRegime The taux autre regime.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setTauxAutreRegime($tauxAutreRegime) {
        $this->tauxAutreRegime = $tauxAutreRegime;
        return $this;
    }

    /**
     * Set the taux c c s.
     *
     * @param float $tauxCCS The taux c c s.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setTauxCCS($tauxCCS) {
        $this->tauxCCS = $tauxCCS;
        return $this;
    }

    /**
     * Set the taux f s h.
     *
     * @param float $tauxFSH The taux f s h.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setTauxFSH($tauxFSH) {
        $this->tauxFSH = $tauxFSH;
        return $this;
    }

    /**
     * Set the taux maladie.
     *
     * @param float $tauxMaladie The taux maladie.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setTauxMaladie($tauxMaladie) {
        $this->tauxMaladie = $tauxMaladie;
        return $this;
    }

    /**
     * Set the taux r u a m m tr2.
     *
     * @param float $tauxRUAMMTr2 The taux r u a m m tr2.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setTauxRUAMMTr2($tauxRUAMMTr2) {
        $this->tauxRUAMMTr2 = $tauxRUAMMTr2;
        return $this;
    }

    /**
     * Set the total cotis autre regime.
     *
     * @param float $totalCotisAutreRegime The total cotis autre regime.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setTotalCotisAutreRegime($totalCotisAutreRegime) {
        $this->totalCotisAutreRegime = $totalCotisAutreRegime;
        return $this;
    }

    /**
     * Set the total cotis c c s.
     *
     * @param float $totalCotisCCS The total cotis c c s.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setTotalCotisCCS($totalCotisCCS) {
        $this->totalCotisCCS = $totalCotisCCS;
        return $this;
    }

    /**
     * Set the total cotis f s h.
     *
     * @param float $totalCotisFSH The total cotis f s h.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setTotalCotisFSH($totalCotisFSH) {
        $this->totalCotisFSH = $totalCotisFSH;
        return $this;
    }

    /**
     * Set the total cotis maladie.
     *
     * @param float $totalCotisMaladie The total cotis maladie.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setTotalCotisMaladie($totalCotisMaladie) {
        $this->totalCotisMaladie = $totalCotisMaladie;
        return $this;
    }

    /**
     * Set the total cotis r u a m m tr2.
     *
     * @param float $totalCotisRUAMMTr2 The total cotis r u a m m tr2.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setTotalCotisRUAMMTr2($totalCotisRUAMMTr2) {
        $this->totalCotisRUAMMTr2 = $totalCotisRUAMMTr2;
        return $this;
    }

    /**
     * Set the total r u a m m tr2.
     *
     * @param float $totalRUAMMTr2 The total r u a m m tr2.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setTotalRUAMMTr2($totalRUAMMTr2) {
        $this->totalRUAMMTr2 = $totalRUAMMTr2;
        return $this;
    }

    /**
     * Set the total remuneration.
     *
     * @param int $totalRemuneration The total remuneration.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setTotalRemuneration($totalRemuneration) {
        $this->totalRemuneration = $totalRemuneration;
        return $this;
    }

    /**
     * Set the total salaire autre regime.
     *
     * @param float $totalSalaireAutreRegime The total salaire autre regime.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setTotalSalaireAutreRegime($totalSalaireAutreRegime) {
        $this->totalSalaireAutreRegime = $totalSalaireAutreRegime;
        return $this;
    }

    /**
     * Set the total salaire c c s.
     *
     * @param float $totalSalaireCCS The total salaire c c s.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setTotalSalaireCCS($totalSalaireCCS) {
        $this->totalSalaireCCS = $totalSalaireCCS;
        return $this;
    }

    /**
     * Set the total salaire f s h.
     *
     * @param float $totalSalaireFSH The total salaire f s h.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setTotalSalaireFSH($totalSalaireFSH) {
        $this->totalSalaireFSH = $totalSalaireFSH;
        return $this;
    }

    /**
     * Set the total salaire maladie.
     *
     * @param float $totalSalaireMaladie The total salaire maladie.
     * @return DeclarationCAFAT Returns this declaration c a f a t.
     */
    public function setTotalSalaireMaladie($totalSalaireMaladie) {
        $this->totalSalaireMaladie = $totalSalaireMaladie;
        return $this;
    }

}
