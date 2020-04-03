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
 * Declaration cafat.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class DeclarationCafat {

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
     * @var DateTime|null
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
     * @var bool
     */
    private $pasDePersonnel;

    /**
     * Pas de reembauche.
     *
     * @var bool
     */
    private $pasDeReembauche;

    /**
     * Periode decla.
     *
     * @var DateTime|null
     */
    private $periodeDecla;

    /**
     * Plafond1 ruamm tr2.
     *
     * @var float
     */
    private $plafond1RuammTr2;

    /**
     * Plafond2 ruamm tr2.
     *
     * @var float
     */
    private $plafond2RuammTr2;

    /**
     * Plafond autre regime.
     *
     * @var float
     */
    private $plafondAutreRegime;

    /**
     * Plafond fsh.
     *
     * @var float
     */
    private $plafondFsh;

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
     * Raison sociale.
     *
     * @var string
     */
    private $raisonSociale;

    /**
     * Rid.
     *
     * @var string
     */
    private $rid;

    /**
     * Secteur.
     *
     * @var string
     */
    private $secteur;

    /**
     * Taux at.
     *
     * @var float
     */
    private $tauxAt;

    /**
     * Taux autre regime.
     *
     * @var float
     */
    private $tauxAutreRegime;

    /**
     * Taux ccs.
     *
     * @var float
     */
    private $tauxCcs;

    /**
     * Taux fsh.
     *
     * @var float
     */
    private $tauxFsh;

    /**
     * Taux maladie.
     *
     * @var float
     */
    private $tauxMaladie;

    /**
     * Taux ruamm tr2.
     *
     * @var float
     */
    private $tauxRuammTr2;

    /**
     * Total cotis autre regime.
     *
     * @var float
     */
    private $totalCotisAutreRegime;

    /**
     * Total cotis ccs.
     *
     * @var float
     */
    private $totalCotisCcs;

    /**
     * Total cotis fsh.
     *
     * @var float
     */
    private $totalCotisFsh;

    /**
     * Total cotis maladie.
     *
     * @var float
     */
    private $totalCotisMaladie;

    /**
     * Total cotis ruamm tr2.
     *
     * @var float
     */
    private $totalCotisRuammTr2;

    /**
     * Total remuneration.
     *
     * @var int
     */
    private $totalRemuneration;

    /**
     * Total ruamm tr2.
     *
     * @var float
     */
    private $totalRuammTr2;

    /**
     * Total salaire autre regime.
     *
     * @var float
     */
    private $totalSalaireAutreRegime;

    /**
     * Total salaire ccs.
     *
     * @var float
     */
    private $totalSalaireCcs;

    /**
     * Total salaire fsh.
     *
     * @var float
     */
    private $totalSalaireFsh;

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
     * @return DateTime|null Returns the date declaration.
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
     * @return bool Returns the pas de personnel.
     */
    public function getPasDePersonnel() {
        return $this->pasDePersonnel;
    }

    /**
     * Get the pas de reembauche.
     *
     * @return bool Returns the pas de reembauche.
     */
    public function getPasDeReembauche() {
        return $this->pasDeReembauche;
    }

    /**
     * Get the periode decla.
     *
     * @return DateTime|null Returns the periode decla.
     */
    public function getPeriodeDecla() {
        return $this->periodeDecla;
    }

    /**
     * Get the plafond1 ruamm tr2.
     *
     * @return float Returns the plafond1 ruamm tr2.
     */
    public function getPlafond1RuammTr2() {
        return $this->plafond1RuammTr2;
    }

    /**
     * Get the plafond2 ruamm tr2.
     *
     * @return float Returns the plafond2 ruamm tr2.
     */
    public function getPlafond2RuammTr2() {
        return $this->plafond2RuammTr2;
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
     * Get the plafond fsh.
     *
     * @return float Returns the plafond fsh.
     */
    public function getPlafondFsh() {
        return $this->plafondFsh;
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
     * Get the raison sociale.
     *
     * @return string Returns the raison sociale.
     */
    public function getRaisonSociale() {
        return $this->raisonSociale;
    }

    /**
     * Get the rid.
     *
     * @return string Returns the rid.
     */
    public function getRid() {
        return $this->rid;
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
     * Get the taux at.
     *
     * @return float Returns the taux at.
     */
    public function getTauxAt() {
        return $this->tauxAt;
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
     * Get the taux ccs.
     *
     * @return float Returns the taux ccs.
     */
    public function getTauxCcs() {
        return $this->tauxCcs;
    }

    /**
     * Get the taux fsh.
     *
     * @return float Returns the taux fsh.
     */
    public function getTauxFsh() {
        return $this->tauxFsh;
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
     * Get the taux ruamm tr2.
     *
     * @return float Returns the taux ruamm tr2.
     */
    public function getTauxRuammTr2() {
        return $this->tauxRuammTr2;
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
     * Get the total cotis ccs.
     *
     * @return float Returns the total cotis ccs.
     */
    public function getTotalCotisCcs() {
        return $this->totalCotisCcs;
    }

    /**
     * Get the total cotis fsh.
     *
     * @return float Returns the total cotis fsh.
     */
    public function getTotalCotisFsh() {
        return $this->totalCotisFsh;
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
     * Get the total cotis ruamm tr2.
     *
     * @return float Returns the total cotis ruamm tr2.
     */
    public function getTotalCotisRuammTr2() {
        return $this->totalCotisRuammTr2;
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
     * Get the total ruamm tr2.
     *
     * @return float Returns the total ruamm tr2.
     */
    public function getTotalRuammTr2() {
        return $this->totalRuammTr2;
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
     * Get the total salaire ccs.
     *
     * @return float Returns the total salaire ccs.
     */
    public function getTotalSalaireCcs() {
        return $this->totalSalaireCcs;
    }

    /**
     * Get the total salaire fsh.
     *
     * @return float Returns the total salaire fsh.
     */
    public function getTotalSalaireFsh() {
        return $this->totalSalaireFsh;
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
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setAdresse1($adresse1) {
        $this->adresse1 = $adresse1;
        return $this;
    }

    /**
     * Set the adresse2.
     *
     * @param string $adresse2 The adresse2.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setAdresse2($adresse2) {
        $this->adresse2 = $adresse2;
        return $this;
    }

    /**
     * Set the adresse3.
     *
     * @param string $adresse3 The adresse3.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setAdresse3($adresse3) {
        $this->adresse3 = $adresse3;
        return $this;
    }

    /**
     * Set the code cotis.
     *
     * @param string $codeCotis The code cotis.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setCodeCotis($codeCotis) {
        $this->codeCotis = $codeCotis;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the date declaration.
     *
     * @param DateTime|null $dateDeclaration The date declaration.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setDateDeclaration(DateTime $dateDeclaration = null) {
        $this->dateDeclaration = $dateDeclaration;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string $lienDocument The lien document.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setLienDocument($lienDocument) {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the mt autre deduction.
     *
     * @param float $mtAutreDeduction The mt autre deduction.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setMtAutreDeduction($mtAutreDeduction) {
        $this->mtAutreDeduction = $mtAutreDeduction;
        return $this;
    }

    /**
     * Set the mt deduction acompte.
     *
     * @param float $mtDeductionAcompte The mt deduction acompte.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setMtDeductionAcompte($mtDeductionAcompte) {
        $this->mtDeductionAcompte = $mtDeductionAcompte;
        return $this;
    }

    /**
     * Set the mt deduction acompte1.
     *
     * @param float $mtDeductionAcompte1 The mt deduction acompte1.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setMtDeductionAcompte1($mtDeductionAcompte1) {
        $this->mtDeductionAcompte1 = $mtDeductionAcompte1;
        return $this;
    }

    /**
     * Set the mt deduction acompte2.
     *
     * @param float $mtDeductionAcompte2 The mt deduction acompte2.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setMtDeductionAcompte2($mtDeductionAcompte2) {
        $this->mtDeductionAcompte2 = $mtDeductionAcompte2;
        return $this;
    }

    /**
     * Set the nb salaries.
     *
     * @param int $nbSalaries The nb salaries.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setNbSalaries($nbSalaries) {
        $this->nbSalaries = $nbSalaries;
        return $this;
    }

    /**
     * Set the no cotisant.
     *
     * @param string $noCotisant The no cotisant.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setNoCotisant($noCotisant) {
        $this->noCotisant = $noCotisant;
        return $this;
    }

    /**
     * Set the organisme.
     *
     * @param string $organisme The organisme.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setOrganisme($organisme) {
        $this->organisme = $organisme;
        return $this;
    }

    /**
     * Set the pas de personnel.
     *
     * @param bool $pasDePersonnel The pas de personnel.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setPasDePersonnel($pasDePersonnel) {
        $this->pasDePersonnel = $pasDePersonnel;
        return $this;
    }

    /**
     * Set the pas de reembauche.
     *
     * @param bool $pasDeReembauche The pas de reembauche.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setPasDeReembauche($pasDeReembauche) {
        $this->pasDeReembauche = $pasDeReembauche;
        return $this;
    }

    /**
     * Set the periode decla.
     *
     * @param DateTime|null $periodeDecla The periode decla.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setPeriodeDecla(DateTime $periodeDecla = null) {
        $this->periodeDecla = $periodeDecla;
        return $this;
    }

    /**
     * Set the plafond1 ruamm tr2.
     *
     * @param float $plafond1RuammTr2 The plafond1 ruamm tr2.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setPlafond1RuammTr2($plafond1RuammTr2) {
        $this->plafond1RuammTr2 = $plafond1RuammTr2;
        return $this;
    }

    /**
     * Set the plafond2 ruamm tr2.
     *
     * @param float $plafond2RuammTr2 The plafond2 ruamm tr2.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setPlafond2RuammTr2($plafond2RuammTr2) {
        $this->plafond2RuammTr2 = $plafond2RuammTr2;
        return $this;
    }

    /**
     * Set the plafond autre regime.
     *
     * @param float $plafondAutreRegime The plafond autre regime.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setPlafondAutreRegime($plafondAutreRegime) {
        $this->plafondAutreRegime = $plafondAutreRegime;
        return $this;
    }

    /**
     * Set the plafond fsh.
     *
     * @param float $plafondFsh The plafond fsh.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setPlafondFsh($plafondFsh) {
        $this->plafondFsh = $plafondFsh;
        return $this;
    }

    /**
     * Set the plafond maladie.
     *
     * @param float $plafondMaladie The plafond maladie.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setPlafondMaladie($plafondMaladie) {
        $this->plafondMaladie = $plafondMaladie;
        return $this;
    }

    /**
     * Set the plafond salaire.
     *
     * @param float $plafondSalaire The plafond salaire.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setPlafondSalaire($plafondSalaire) {
        $this->plafondSalaire = $plafondSalaire;
        return $this;
    }

    /**
     * Set the raison sociale.
     *
     * @param string $raisonSociale The raison sociale.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setRaisonSociale($raisonSociale) {
        $this->raisonSociale = $raisonSociale;
        return $this;
    }

    /**
     * Set the rid.
     *
     * @param string $rid The rid.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setRid($rid) {
        $this->rid = $rid;
        return $this;
    }

    /**
     * Set the secteur.
     *
     * @param string $secteur The secteur.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setSecteur($secteur) {
        $this->secteur = $secteur;
        return $this;
    }

    /**
     * Set the taux at.
     *
     * @param float $tauxAt The taux at.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setTauxAt($tauxAt) {
        $this->tauxAt = $tauxAt;
        return $this;
    }

    /**
     * Set the taux autre regime.
     *
     * @param float $tauxAutreRegime The taux autre regime.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setTauxAutreRegime($tauxAutreRegime) {
        $this->tauxAutreRegime = $tauxAutreRegime;
        return $this;
    }

    /**
     * Set the taux ccs.
     *
     * @param float $tauxCcs The taux ccs.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setTauxCcs($tauxCcs) {
        $this->tauxCcs = $tauxCcs;
        return $this;
    }

    /**
     * Set the taux fsh.
     *
     * @param float $tauxFsh The taux fsh.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setTauxFsh($tauxFsh) {
        $this->tauxFsh = $tauxFsh;
        return $this;
    }

    /**
     * Set the taux maladie.
     *
     * @param float $tauxMaladie The taux maladie.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setTauxMaladie($tauxMaladie) {
        $this->tauxMaladie = $tauxMaladie;
        return $this;
    }

    /**
     * Set the taux ruamm tr2.
     *
     * @param float $tauxRuammTr2 The taux ruamm tr2.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setTauxRuammTr2($tauxRuammTr2) {
        $this->tauxRuammTr2 = $tauxRuammTr2;
        return $this;
    }

    /**
     * Set the total cotis autre regime.
     *
     * @param float $totalCotisAutreRegime The total cotis autre regime.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setTotalCotisAutreRegime($totalCotisAutreRegime) {
        $this->totalCotisAutreRegime = $totalCotisAutreRegime;
        return $this;
    }

    /**
     * Set the total cotis ccs.
     *
     * @param float $totalCotisCcs The total cotis ccs.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setTotalCotisCcs($totalCotisCcs) {
        $this->totalCotisCcs = $totalCotisCcs;
        return $this;
    }

    /**
     * Set the total cotis fsh.
     *
     * @param float $totalCotisFsh The total cotis fsh.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setTotalCotisFsh($totalCotisFsh) {
        $this->totalCotisFsh = $totalCotisFsh;
        return $this;
    }

    /**
     * Set the total cotis maladie.
     *
     * @param float $totalCotisMaladie The total cotis maladie.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setTotalCotisMaladie($totalCotisMaladie) {
        $this->totalCotisMaladie = $totalCotisMaladie;
        return $this;
    }

    /**
     * Set the total cotis ruamm tr2.
     *
     * @param float $totalCotisRuammTr2 The total cotis ruamm tr2.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setTotalCotisRuammTr2($totalCotisRuammTr2) {
        $this->totalCotisRuammTr2 = $totalCotisRuammTr2;
        return $this;
    }

    /**
     * Set the total remuneration.
     *
     * @param int $totalRemuneration The total remuneration.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setTotalRemuneration($totalRemuneration) {
        $this->totalRemuneration = $totalRemuneration;
        return $this;
    }

    /**
     * Set the total ruamm tr2.
     *
     * @param float $totalRuammTr2 The total ruamm tr2.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setTotalRuammTr2($totalRuammTr2) {
        $this->totalRuammTr2 = $totalRuammTr2;
        return $this;
    }

    /**
     * Set the total salaire autre regime.
     *
     * @param float $totalSalaireAutreRegime The total salaire autre regime.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setTotalSalaireAutreRegime($totalSalaireAutreRegime) {
        $this->totalSalaireAutreRegime = $totalSalaireAutreRegime;
        return $this;
    }

    /**
     * Set the total salaire ccs.
     *
     * @param float $totalSalaireCcs The total salaire ccs.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setTotalSalaireCcs($totalSalaireCcs) {
        $this->totalSalaireCcs = $totalSalaireCcs;
        return $this;
    }

    /**
     * Set the total salaire fsh.
     *
     * @param float $totalSalaireFsh The total salaire fsh.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setTotalSalaireFsh($totalSalaireFsh) {
        $this->totalSalaireFsh = $totalSalaireFsh;
        return $this;
    }

    /**
     * Set the total salaire maladie.
     *
     * @param float $totalSalaireMaladie The total salaire maladie.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setTotalSalaireMaladie($totalSalaireMaladie) {
        $this->totalSalaireMaladie = $totalSalaireMaladie;
        return $this;
    }
}
