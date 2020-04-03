<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

use DateTime;

/**
 * Histo prep paie.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class HistoPrepPaie {

    /**
     * Code employe.
     *
     * @var string
     */
    private $codeEmploye;

    /**
     * Contingent h sup repos comp.
     *
     * @var float
     */
    private $contingentHSupReposComp;

    /**
     * Droit cp.
     *
     * @var float
     */
    private $droitCp;

    /**
     * Etat.
     *
     * @var string
     */
    private $etat;

    /**
     * H prev.
     *
     * @var float
     */
    private $hPrev;

    /**
     * H rempl.
     *
     * @var float
     */
    private $hRempl;

    /**
     * H surcroit.
     *
     * @var float
     */
    private $hSurcroit;

    /**
     * Habs0.
     *
     * @var float
     */
    private $habs0;

    /**
     * Habs1.
     *
     * @var float
     */
    private $habs1;

    /**
     * Habs2.
     *
     * @var float
     */
    private $habs2;

    /**
     * Habs3.
     *
     * @var float
     */
    private $habs3;

    /**
     * Habs4.
     *
     * @var float
     */
    private $habs4;

    /**
     * Habs5.
     *
     * @var float
     */
    private $habs5;

    /**
     * Habs6.
     *
     * @var float
     */
    private $habs6;

    /**
     * Habs7.
     *
     * @var float
     */
    private $habs7;

    /**
     * Habs8.
     *
     * @var float
     */
    private $habs8;

    /**
     * Habs9.
     *
     * @var float
     */
    private $habs9;

    /**
     * Hacp.
     *
     * @var float
     */
    private $hacp;

    /**
     * Hc.
     *
     * @var float
     */
    private $hc;

    /**
     * Heures rc acquises.
     *
     * @var float
     */
    private $heuresRcAcquises;

    /**
     * Heures rr acquises.
     *
     * @var float
     */
    private $heuresRrAcquises;

    /**
     * Hs1.
     *
     * @var float
     */
    private $hs1;

    /**
     * Hs2.
     *
     * @var float
     */
    private $hs2;

    /**
     * Hs3.
     *
     * @var float
     */
    private $hs3;

    /**
     * Hs35 heures.
     *
     * @var float
     */
    private $hs35Heures;

    /**
     * Jacp.
     *
     * @var int
     */
    private $jacp;

    /**
     * Jours rtt acquis.
     *
     * @var float
     */
    private $joursRttAcquis;

    /**
     * Mensualisation.
     *
     * @var float
     */
    private $mensualisation;

    /**
     * Mt prime1 chantier.
     *
     * @var float
     */
    private $mtPrime1Chantier;

    /**
     * Mt prime2 chantier.
     *
     * @var float
     */
    private $mtPrime2Chantier;

    /**
     * Mt prime3 chantier.
     *
     * @var float
     */
    private $mtPrime3Chantier;

    /**
     * Mt prime forfait.
     *
     * @var float
     */
    private $mtPrimeForfait;

    /**
     * Nb heures rs.
     *
     * @var float
     */
    private $nbHeuresRs;

    /**
     * Nb heures tp.
     *
     * @var float
     */
    private $nbHeuresTp;

    /**
     * Nb paniers.
     *
     * @var float
     */
    private $nbPaniers;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Prime1.
     *
     * @var float
     */
    private $prime1;

    /**
     * Prime10.
     *
     * @var float
     */
    private $prime10;

    /**
     * Prime1 mai.
     *
     * @var float
     */
    private $prime1Mai;

    /**
     * Prime2.
     *
     * @var float
     */
    private $prime2;

    /**
     * Prime3.
     *
     * @var float
     */
    private $prime3;

    /**
     * Prime4.
     *
     * @var float
     */
    private $prime4;

    /**
     * Prime5.
     *
     * @var float
     */
    private $prime5;

    /**
     * Prime6.
     *
     * @var float
     */
    private $prime6;

    /**
     * Prime7.
     *
     * @var float
     */
    private $prime7;

    /**
     * Prime8.
     *
     * @var float
     */
    private $prime8;

    /**
     * Prime9.
     *
     * @var float
     */
    private $prime9;

    /**
     * Prime h compl maj.
     *
     * @var float
     */
    private $primeHComplMaj;

    /**
     * Prime h dim2 normal.
     *
     * @var float
     */
    private $primeHDim2Normal;

    /**
     * Prime h dim except.
     *
     * @var float
     */
    private $primeHDimExcept;

    /**
     * Prime h dim normal.
     *
     * @var float
     */
    private $primeHDimNormal;

    /**
     * Prime h nuit2 normal.
     *
     * @var float
     */
    private $primeHNuit2Normal;

    /**
     * Prime h nuit except.
     *
     * @var float
     */
    private $primeHNuitExcept;

    /**
     * Prime h nuit normal.
     *
     * @var float
     */
    private $primeHNuitNormal;

    /**
     * Prime jf2 normal.
     *
     * @var float
     */
    private $primeJf2Normal;

    /**
     * Prime jf except.
     *
     * @var float
     */
    private $primeJfExcept;

    /**
     * Prime jf normal.
     *
     * @var float
     */
    private $primeJfNormal;

    /**
     * Temps passe.
     *
     * @var float
     */
    private $tempsPasse;

    /**
     * Total h anal.
     *
     * @var float
     */
    private $totalHAnal;

    /**
     * Tx horaire rs.
     *
     * @var float
     */
    private $txHoraireRs;

    /**
     * Tx horaire tp.
     *
     * @var float
     */
    private $txHoraireTp;

    /**
     * Ya eu saisie manuelle.
     *
     * @var bool
     */
    private $yaEuSaisieManuelle;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code employe.
     *
     * @return string Returns the code employe.
     */
    public function getCodeEmploye() {
        return $this->codeEmploye;
    }

    /**
     * Get the contingent h sup repos comp.
     *
     * @return float Returns the contingent h sup repos comp.
     */
    public function getContingentHSupReposComp() {
        return $this->contingentHSupReposComp;
    }

    /**
     * Get the droit cp.
     *
     * @return float Returns the droit cp.
     */
    public function getDroitCp() {
        return $this->droitCp;
    }

    /**
     * Get the etat.
     *
     * @return string Returns the etat.
     */
    public function getEtat() {
        return $this->etat;
    }

    /**
     * Get the h prev.
     *
     * @return float Returns the h prev.
     */
    public function getHPrev() {
        return $this->hPrev;
    }

    /**
     * Get the h rempl.
     *
     * @return float Returns the h rempl.
     */
    public function getHRempl() {
        return $this->hRempl;
    }

    /**
     * Get the h surcroit.
     *
     * @return float Returns the h surcroit.
     */
    public function getHSurcroit() {
        return $this->hSurcroit;
    }

    /**
     * Get the habs0.
     *
     * @return float Returns the habs0.
     */
    public function getHabs0() {
        return $this->habs0;
    }

    /**
     * Get the habs1.
     *
     * @return float Returns the habs1.
     */
    public function getHabs1() {
        return $this->habs1;
    }

    /**
     * Get the habs2.
     *
     * @return float Returns the habs2.
     */
    public function getHabs2() {
        return $this->habs2;
    }

    /**
     * Get the habs3.
     *
     * @return float Returns the habs3.
     */
    public function getHabs3() {
        return $this->habs3;
    }

    /**
     * Get the habs4.
     *
     * @return float Returns the habs4.
     */
    public function getHabs4() {
        return $this->habs4;
    }

    /**
     * Get the habs5.
     *
     * @return float Returns the habs5.
     */
    public function getHabs5() {
        return $this->habs5;
    }

    /**
     * Get the habs6.
     *
     * @return float Returns the habs6.
     */
    public function getHabs6() {
        return $this->habs6;
    }

    /**
     * Get the habs7.
     *
     * @return float Returns the habs7.
     */
    public function getHabs7() {
        return $this->habs7;
    }

    /**
     * Get the habs8.
     *
     * @return float Returns the habs8.
     */
    public function getHabs8() {
        return $this->habs8;
    }

    /**
     * Get the habs9.
     *
     * @return float Returns the habs9.
     */
    public function getHabs9() {
        return $this->habs9;
    }

    /**
     * Get the hacp.
     *
     * @return float Returns the hacp.
     */
    public function getHacp() {
        return $this->hacp;
    }

    /**
     * Get the hc.
     *
     * @return float Returns the hc.
     */
    public function getHc() {
        return $this->hc;
    }

    /**
     * Get the heures rc acquises.
     *
     * @return float Returns the heures rc acquises.
     */
    public function getHeuresRcAcquises() {
        return $this->heuresRcAcquises;
    }

    /**
     * Get the heures rr acquises.
     *
     * @return float Returns the heures rr acquises.
     */
    public function getHeuresRrAcquises() {
        return $this->heuresRrAcquises;
    }

    /**
     * Get the hs1.
     *
     * @return float Returns the hs1.
     */
    public function getHs1() {
        return $this->hs1;
    }

    /**
     * Get the hs2.
     *
     * @return float Returns the hs2.
     */
    public function getHs2() {
        return $this->hs2;
    }

    /**
     * Get the hs3.
     *
     * @return float Returns the hs3.
     */
    public function getHs3() {
        return $this->hs3;
    }

    /**
     * Get the hs35 heures.
     *
     * @return float Returns the hs35 heures.
     */
    public function getHs35Heures() {
        return $this->hs35Heures;
    }

    /**
     * Get the jacp.
     *
     * @return int Returns the jacp.
     */
    public function getJacp() {
        return $this->jacp;
    }

    /**
     * Get the jours rtt acquis.
     *
     * @return float Returns the jours rtt acquis.
     */
    public function getJoursRttAcquis() {
        return $this->joursRttAcquis;
    }

    /**
     * Get the mensualisation.
     *
     * @return float Returns the mensualisation.
     */
    public function getMensualisation() {
        return $this->mensualisation;
    }

    /**
     * Get the mt prime1 chantier.
     *
     * @return float Returns the mt prime1 chantier.
     */
    public function getMtPrime1Chantier() {
        return $this->mtPrime1Chantier;
    }

    /**
     * Get the mt prime2 chantier.
     *
     * @return float Returns the mt prime2 chantier.
     */
    public function getMtPrime2Chantier() {
        return $this->mtPrime2Chantier;
    }

    /**
     * Get the mt prime3 chantier.
     *
     * @return float Returns the mt prime3 chantier.
     */
    public function getMtPrime3Chantier() {
        return $this->mtPrime3Chantier;
    }

    /**
     * Get the mt prime forfait.
     *
     * @return float Returns the mt prime forfait.
     */
    public function getMtPrimeForfait() {
        return $this->mtPrimeForfait;
    }

    /**
     * Get the nb heures rs.
     *
     * @return float Returns the nb heures rs.
     */
    public function getNbHeuresRs() {
        return $this->nbHeuresRs;
    }

    /**
     * Get the nb heures tp.
     *
     * @return float Returns the nb heures tp.
     */
    public function getNbHeuresTp() {
        return $this->nbHeuresTp;
    }

    /**
     * Get the nb paniers.
     *
     * @return float Returns the nb paniers.
     */
    public function getNbPaniers() {
        return $this->nbPaniers;
    }

    /**
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
    }

    /**
     * Get the prime1.
     *
     * @return float Returns the prime1.
     */
    public function getPrime1() {
        return $this->prime1;
    }

    /**
     * Get the prime10.
     *
     * @return float Returns the prime10.
     */
    public function getPrime10() {
        return $this->prime10;
    }

    /**
     * Get the prime1 mai.
     *
     * @return float Returns the prime1 mai.
     */
    public function getPrime1Mai() {
        return $this->prime1Mai;
    }

    /**
     * Get the prime2.
     *
     * @return float Returns the prime2.
     */
    public function getPrime2() {
        return $this->prime2;
    }

    /**
     * Get the prime3.
     *
     * @return float Returns the prime3.
     */
    public function getPrime3() {
        return $this->prime3;
    }

    /**
     * Get the prime4.
     *
     * @return float Returns the prime4.
     */
    public function getPrime4() {
        return $this->prime4;
    }

    /**
     * Get the prime5.
     *
     * @return float Returns the prime5.
     */
    public function getPrime5() {
        return $this->prime5;
    }

    /**
     * Get the prime6.
     *
     * @return float Returns the prime6.
     */
    public function getPrime6() {
        return $this->prime6;
    }

    /**
     * Get the prime7.
     *
     * @return float Returns the prime7.
     */
    public function getPrime7() {
        return $this->prime7;
    }

    /**
     * Get the prime8.
     *
     * @return float Returns the prime8.
     */
    public function getPrime8() {
        return $this->prime8;
    }

    /**
     * Get the prime9.
     *
     * @return float Returns the prime9.
     */
    public function getPrime9() {
        return $this->prime9;
    }

    /**
     * Get the prime h compl maj.
     *
     * @return float Returns the prime h compl maj.
     */
    public function getPrimeHComplMaj() {
        return $this->primeHComplMaj;
    }

    /**
     * Get the prime h dim2 normal.
     *
     * @return float Returns the prime h dim2 normal.
     */
    public function getPrimeHDim2Normal() {
        return $this->primeHDim2Normal;
    }

    /**
     * Get the prime h dim except.
     *
     * @return float Returns the prime h dim except.
     */
    public function getPrimeHDimExcept() {
        return $this->primeHDimExcept;
    }

    /**
     * Get the prime h dim normal.
     *
     * @return float Returns the prime h dim normal.
     */
    public function getPrimeHDimNormal() {
        return $this->primeHDimNormal;
    }

    /**
     * Get the prime h nuit2 normal.
     *
     * @return float Returns the prime h nuit2 normal.
     */
    public function getPrimeHNuit2Normal() {
        return $this->primeHNuit2Normal;
    }

    /**
     * Get the prime h nuit except.
     *
     * @return float Returns the prime h nuit except.
     */
    public function getPrimeHNuitExcept() {
        return $this->primeHNuitExcept;
    }

    /**
     * Get the prime h nuit normal.
     *
     * @return float Returns the prime h nuit normal.
     */
    public function getPrimeHNuitNormal() {
        return $this->primeHNuitNormal;
    }

    /**
     * Get the prime jf2 normal.
     *
     * @return float Returns the prime jf2 normal.
     */
    public function getPrimeJf2Normal() {
        return $this->primeJf2Normal;
    }

    /**
     * Get the prime jf except.
     *
     * @return float Returns the prime jf except.
     */
    public function getPrimeJfExcept() {
        return $this->primeJfExcept;
    }

    /**
     * Get the prime jf normal.
     *
     * @return float Returns the prime jf normal.
     */
    public function getPrimeJfNormal() {
        return $this->primeJfNormal;
    }

    /**
     * Get the temps passe.
     *
     * @return float Returns the temps passe.
     */
    public function getTempsPasse() {
        return $this->tempsPasse;
    }

    /**
     * Get the total h anal.
     *
     * @return float Returns the total h anal.
     */
    public function getTotalHAnal() {
        return $this->totalHAnal;
    }

    /**
     * Get the tx horaire rs.
     *
     * @return float Returns the tx horaire rs.
     */
    public function getTxHoraireRs() {
        return $this->txHoraireRs;
    }

    /**
     * Get the tx horaire tp.
     *
     * @return float Returns the tx horaire tp.
     */
    public function getTxHoraireTp() {
        return $this->txHoraireTp;
    }

    /**
     * Get the ya eu saisie manuelle.
     *
     * @return bool Returns the ya eu saisie manuelle.
     */
    public function getYaEuSaisieManuelle() {
        return $this->yaEuSaisieManuelle;
    }

    /**
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the contingent h sup repos comp.
     *
     * @param float $contingentHSupReposComp The contingent h sup repos comp.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setContingentHSupReposComp($contingentHSupReposComp) {
        $this->contingentHSupReposComp = $contingentHSupReposComp;
        return $this;
    }

    /**
     * Set the droit cp.
     *
     * @param float $droitCp The droit cp.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setDroitCp($droitCp) {
        $this->droitCp = $droitCp;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string $etat The etat.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the h prev.
     *
     * @param float $hPrev The h prev.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHPrev($hPrev) {
        $this->hPrev = $hPrev;
        return $this;
    }

    /**
     * Set the h rempl.
     *
     * @param float $hRempl The h rempl.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHRempl($hRempl) {
        $this->hRempl = $hRempl;
        return $this;
    }

    /**
     * Set the h surcroit.
     *
     * @param float $hSurcroit The h surcroit.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHSurcroit($hSurcroit) {
        $this->hSurcroit = $hSurcroit;
        return $this;
    }

    /**
     * Set the habs0.
     *
     * @param float $habs0 The habs0.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHabs0($habs0) {
        $this->habs0 = $habs0;
        return $this;
    }

    /**
     * Set the habs1.
     *
     * @param float $habs1 The habs1.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHabs1($habs1) {
        $this->habs1 = $habs1;
        return $this;
    }

    /**
     * Set the habs2.
     *
     * @param float $habs2 The habs2.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHabs2($habs2) {
        $this->habs2 = $habs2;
        return $this;
    }

    /**
     * Set the habs3.
     *
     * @param float $habs3 The habs3.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHabs3($habs3) {
        $this->habs3 = $habs3;
        return $this;
    }

    /**
     * Set the habs4.
     *
     * @param float $habs4 The habs4.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHabs4($habs4) {
        $this->habs4 = $habs4;
        return $this;
    }

    /**
     * Set the habs5.
     *
     * @param float $habs5 The habs5.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHabs5($habs5) {
        $this->habs5 = $habs5;
        return $this;
    }

    /**
     * Set the habs6.
     *
     * @param float $habs6 The habs6.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHabs6($habs6) {
        $this->habs6 = $habs6;
        return $this;
    }

    /**
     * Set the habs7.
     *
     * @param float $habs7 The habs7.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHabs7($habs7) {
        $this->habs7 = $habs7;
        return $this;
    }

    /**
     * Set the habs8.
     *
     * @param float $habs8 The habs8.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHabs8($habs8) {
        $this->habs8 = $habs8;
        return $this;
    }

    /**
     * Set the habs9.
     *
     * @param float $habs9 The habs9.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHabs9($habs9) {
        $this->habs9 = $habs9;
        return $this;
    }

    /**
     * Set the hacp.
     *
     * @param float $hacp The hacp.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHacp($hacp) {
        $this->hacp = $hacp;
        return $this;
    }

    /**
     * Set the hc.
     *
     * @param float $hc The hc.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHc($hc) {
        $this->hc = $hc;
        return $this;
    }

    /**
     * Set the heures rc acquises.
     *
     * @param float $heuresRcAcquises The heures rc acquises.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHeuresRcAcquises($heuresRcAcquises) {
        $this->heuresRcAcquises = $heuresRcAcquises;
        return $this;
    }

    /**
     * Set the heures rr acquises.
     *
     * @param float $heuresRrAcquises The heures rr acquises.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHeuresRrAcquises($heuresRrAcquises) {
        $this->heuresRrAcquises = $heuresRrAcquises;
        return $this;
    }

    /**
     * Set the hs1.
     *
     * @param float $hs1 The hs1.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHs1($hs1) {
        $this->hs1 = $hs1;
        return $this;
    }

    /**
     * Set the hs2.
     *
     * @param float $hs2 The hs2.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHs2($hs2) {
        $this->hs2 = $hs2;
        return $this;
    }

    /**
     * Set the hs3.
     *
     * @param float $hs3 The hs3.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHs3($hs3) {
        $this->hs3 = $hs3;
        return $this;
    }

    /**
     * Set the hs35 heures.
     *
     * @param float $hs35Heures The hs35 heures.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHs35Heures($hs35Heures) {
        $this->hs35Heures = $hs35Heures;
        return $this;
    }

    /**
     * Set the jacp.
     *
     * @param int $jacp The jacp.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setJacp($jacp) {
        $this->jacp = $jacp;
        return $this;
    }

    /**
     * Set the jours rtt acquis.
     *
     * @param float $joursRttAcquis The jours rtt acquis.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setJoursRttAcquis($joursRttAcquis) {
        $this->joursRttAcquis = $joursRttAcquis;
        return $this;
    }

    /**
     * Set the mensualisation.
     *
     * @param float $mensualisation The mensualisation.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setMensualisation($mensualisation) {
        $this->mensualisation = $mensualisation;
        return $this;
    }

    /**
     * Set the mt prime1 chantier.
     *
     * @param float $mtPrime1Chantier The mt prime1 chantier.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setMtPrime1Chantier($mtPrime1Chantier) {
        $this->mtPrime1Chantier = $mtPrime1Chantier;
        return $this;
    }

    /**
     * Set the mt prime2 chantier.
     *
     * @param float $mtPrime2Chantier The mt prime2 chantier.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setMtPrime2Chantier($mtPrime2Chantier) {
        $this->mtPrime2Chantier = $mtPrime2Chantier;
        return $this;
    }

    /**
     * Set the mt prime3 chantier.
     *
     * @param float $mtPrime3Chantier The mt prime3 chantier.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setMtPrime3Chantier($mtPrime3Chantier) {
        $this->mtPrime3Chantier = $mtPrime3Chantier;
        return $this;
    }

    /**
     * Set the mt prime forfait.
     *
     * @param float $mtPrimeForfait The mt prime forfait.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setMtPrimeForfait($mtPrimeForfait) {
        $this->mtPrimeForfait = $mtPrimeForfait;
        return $this;
    }

    /**
     * Set the nb heures rs.
     *
     * @param float $nbHeuresRs The nb heures rs.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setNbHeuresRs($nbHeuresRs) {
        $this->nbHeuresRs = $nbHeuresRs;
        return $this;
    }

    /**
     * Set the nb heures tp.
     *
     * @param float $nbHeuresTp The nb heures tp.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setNbHeuresTp($nbHeuresTp) {
        $this->nbHeuresTp = $nbHeuresTp;
        return $this;
    }

    /**
     * Set the nb paniers.
     *
     * @param float $nbPaniers The nb paniers.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setNbPaniers($nbPaniers) {
        $this->nbPaniers = $nbPaniers;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the prime1.
     *
     * @param float $prime1 The prime1.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrime1($prime1) {
        $this->prime1 = $prime1;
        return $this;
    }

    /**
     * Set the prime10.
     *
     * @param float $prime10 The prime10.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrime10($prime10) {
        $this->prime10 = $prime10;
        return $this;
    }

    /**
     * Set the prime1 mai.
     *
     * @param float $prime1Mai The prime1 mai.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrime1Mai($prime1Mai) {
        $this->prime1Mai = $prime1Mai;
        return $this;
    }

    /**
     * Set the prime2.
     *
     * @param float $prime2 The prime2.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrime2($prime2) {
        $this->prime2 = $prime2;
        return $this;
    }

    /**
     * Set the prime3.
     *
     * @param float $prime3 The prime3.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrime3($prime3) {
        $this->prime3 = $prime3;
        return $this;
    }

    /**
     * Set the prime4.
     *
     * @param float $prime4 The prime4.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrime4($prime4) {
        $this->prime4 = $prime4;
        return $this;
    }

    /**
     * Set the prime5.
     *
     * @param float $prime5 The prime5.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrime5($prime5) {
        $this->prime5 = $prime5;
        return $this;
    }

    /**
     * Set the prime6.
     *
     * @param float $prime6 The prime6.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrime6($prime6) {
        $this->prime6 = $prime6;
        return $this;
    }

    /**
     * Set the prime7.
     *
     * @param float $prime7 The prime7.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrime7($prime7) {
        $this->prime7 = $prime7;
        return $this;
    }

    /**
     * Set the prime8.
     *
     * @param float $prime8 The prime8.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrime8($prime8) {
        $this->prime8 = $prime8;
        return $this;
    }

    /**
     * Set the prime9.
     *
     * @param float $prime9 The prime9.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrime9($prime9) {
        $this->prime9 = $prime9;
        return $this;
    }

    /**
     * Set the prime h compl maj.
     *
     * @param float $primeHComplMaj The prime h compl maj.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrimeHComplMaj($primeHComplMaj) {
        $this->primeHComplMaj = $primeHComplMaj;
        return $this;
    }

    /**
     * Set the prime h dim2 normal.
     *
     * @param float $primeHDim2Normal The prime h dim2 normal.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrimeHDim2Normal($primeHDim2Normal) {
        $this->primeHDim2Normal = $primeHDim2Normal;
        return $this;
    }

    /**
     * Set the prime h dim except.
     *
     * @param float $primeHDimExcept The prime h dim except.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrimeHDimExcept($primeHDimExcept) {
        $this->primeHDimExcept = $primeHDimExcept;
        return $this;
    }

    /**
     * Set the prime h dim normal.
     *
     * @param float $primeHDimNormal The prime h dim normal.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrimeHDimNormal($primeHDimNormal) {
        $this->primeHDimNormal = $primeHDimNormal;
        return $this;
    }

    /**
     * Set the prime h nuit2 normal.
     *
     * @param float $primeHNuit2Normal The prime h nuit2 normal.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrimeHNuit2Normal($primeHNuit2Normal) {
        $this->primeHNuit2Normal = $primeHNuit2Normal;
        return $this;
    }

    /**
     * Set the prime h nuit except.
     *
     * @param float $primeHNuitExcept The prime h nuit except.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrimeHNuitExcept($primeHNuitExcept) {
        $this->primeHNuitExcept = $primeHNuitExcept;
        return $this;
    }

    /**
     * Set the prime h nuit normal.
     *
     * @param float $primeHNuitNormal The prime h nuit normal.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrimeHNuitNormal($primeHNuitNormal) {
        $this->primeHNuitNormal = $primeHNuitNormal;
        return $this;
    }

    /**
     * Set the prime jf2 normal.
     *
     * @param float $primeJf2Normal The prime jf2 normal.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrimeJf2Normal($primeJf2Normal) {
        $this->primeJf2Normal = $primeJf2Normal;
        return $this;
    }

    /**
     * Set the prime jf except.
     *
     * @param float $primeJfExcept The prime jf except.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrimeJfExcept($primeJfExcept) {
        $this->primeJfExcept = $primeJfExcept;
        return $this;
    }

    /**
     * Set the prime jf normal.
     *
     * @param float $primeJfNormal The prime jf normal.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrimeJfNormal($primeJfNormal) {
        $this->primeJfNormal = $primeJfNormal;
        return $this;
    }

    /**
     * Set the temps passe.
     *
     * @param float $tempsPasse The temps passe.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setTempsPasse($tempsPasse) {
        $this->tempsPasse = $tempsPasse;
        return $this;
    }

    /**
     * Set the total h anal.
     *
     * @param float $totalHAnal The total h anal.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setTotalHAnal($totalHAnal) {
        $this->totalHAnal = $totalHAnal;
        return $this;
    }

    /**
     * Set the tx horaire rs.
     *
     * @param float $txHoraireRs The tx horaire rs.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setTxHoraireRs($txHoraireRs) {
        $this->txHoraireRs = $txHoraireRs;
        return $this;
    }

    /**
     * Set the tx horaire tp.
     *
     * @param float $txHoraireTp The tx horaire tp.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setTxHoraireTp($txHoraireTp) {
        $this->txHoraireTp = $txHoraireTp;
        return $this;
    }

    /**
     * Set the ya eu saisie manuelle.
     *
     * @param bool $yaEuSaisieManuelle The ya eu saisie manuelle.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setYaEuSaisieManuelle($yaEuSaisieManuelle) {
        $this->yaEuSaisieManuelle = $yaEuSaisieManuelle;
        return $this;
    }
}
