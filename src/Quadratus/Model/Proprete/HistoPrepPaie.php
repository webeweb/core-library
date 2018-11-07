<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\Proprete;

use DateTime;

/**
 * Histo prep paie model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
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
     * Droit c p.
     *
     * @var float
     */
    private $droitCP;

    /**
     * Etat.
     *
     * @var string
     */
    private $etat;

    /**
     * H a b s0.
     *
     * @var float
     */
    private $hABS0;

    /**
     * H a b s1.
     *
     * @var float
     */
    private $hABS1;

    /**
     * H a b s2.
     *
     * @var float
     */
    private $hABS2;

    /**
     * H a b s3.
     *
     * @var float
     */
    private $hABS3;

    /**
     * H a b s4.
     *
     * @var float
     */
    private $hABS4;

    /**
     * H a b s5.
     *
     * @var float
     */
    private $hABS5;

    /**
     * H a b s6.
     *
     * @var float
     */
    private $hABS6;

    /**
     * H a b s7.
     *
     * @var float
     */
    private $hABS7;

    /**
     * H a b s8.
     *
     * @var float
     */
    private $hABS8;

    /**
     * H a b s9.
     *
     * @var float
     */
    private $hABS9;

    /**
     * H a c p.
     *
     * @var float
     */
    private $hACP;

    /**
     * H c.
     *
     * @var float
     */
    private $hC;

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
     * H s1.
     *
     * @var float
     */
    private $hS1;

    /**
     * H s2.
     *
     * @var float
     */
    private $hS2;

    /**
     * H s3.
     *
     * @var float
     */
    private $hS3;

    /**
     * H s35 heures.
     *
     * @var float
     */
    private $hS35Heures;

    /**
     * H surcroit.
     *
     * @var float
     */
    private $hSurcroit;

    /**
     * Heures r c acquises.
     *
     * @var float
     */
    private $heuresRCAcquises;

    /**
     * Heures r r acquises.
     *
     * @var float
     */
    private $heuresRRAcquises;

    /**
     * J a c p.
     *
     * @var int
     */
    private $jACP;

    /**
     * Jours r t t acquis.
     *
     * @var float
     */
    private $joursRTTAcquis;

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
     * Nb heures r s.
     *
     * @var float
     */
    private $nbHeuresRS;

    /**
     * Nb heures t p.
     *
     * @var float
     */
    private $nbHeuresTP;

    /**
     * Nb paniers.
     *
     * @var float
     */
    private $nbPaniers;

    /**
     * Periode.
     *
     * @var DateTime
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
     * Prime j f2 normal.
     *
     * @var float
     */
    private $primeJF2Normal;

    /**
     * Prime j f except.
     *
     * @var float
     */
    private $primeJFExcept;

    /**
     * Prime j f normal.
     *
     * @var float
     */
    private $primeJFNormal;

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
     * Tx horaire r s.
     *
     * @var float
     */
    private $txHoraireRS;

    /**
     * Tx horaire t p.
     *
     * @var float
     */
    private $txHoraireTP;

    /**
     * Ya eu saisie manuelle.
     *
     * @var boolean
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
     * Get the droit c p.
     *
     * @return float Returns the droit c p.
     */
    public function getDroitCP() {
        return $this->droitCP;
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
     * Get the h a b s0.
     *
     * @return float Returns the h a b s0.
     */
    public function getHABS0() {
        return $this->hABS0;
    }

    /**
     * Get the h a b s1.
     *
     * @return float Returns the h a b s1.
     */
    public function getHABS1() {
        return $this->hABS1;
    }

    /**
     * Get the h a b s2.
     *
     * @return float Returns the h a b s2.
     */
    public function getHABS2() {
        return $this->hABS2;
    }

    /**
     * Get the h a b s3.
     *
     * @return float Returns the h a b s3.
     */
    public function getHABS3() {
        return $this->hABS3;
    }

    /**
     * Get the h a b s4.
     *
     * @return float Returns the h a b s4.
     */
    public function getHABS4() {
        return $this->hABS4;
    }

    /**
     * Get the h a b s5.
     *
     * @return float Returns the h a b s5.
     */
    public function getHABS5() {
        return $this->hABS5;
    }

    /**
     * Get the h a b s6.
     *
     * @return float Returns the h a b s6.
     */
    public function getHABS6() {
        return $this->hABS6;
    }

    /**
     * Get the h a b s7.
     *
     * @return float Returns the h a b s7.
     */
    public function getHABS7() {
        return $this->hABS7;
    }

    /**
     * Get the h a b s8.
     *
     * @return float Returns the h a b s8.
     */
    public function getHABS8() {
        return $this->hABS8;
    }

    /**
     * Get the h a b s9.
     *
     * @return float Returns the h a b s9.
     */
    public function getHABS9() {
        return $this->hABS9;
    }

    /**
     * Get the h a c p.
     *
     * @return float Returns the h a c p.
     */
    public function getHACP() {
        return $this->hACP;
    }

    /**
     * Get the h c.
     *
     * @return float Returns the h c.
     */
    public function getHC() {
        return $this->hC;
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
     * Get the h s1.
     *
     * @return float Returns the h s1.
     */
    public function getHS1() {
        return $this->hS1;
    }

    /**
     * Get the h s2.
     *
     * @return float Returns the h s2.
     */
    public function getHS2() {
        return $this->hS2;
    }

    /**
     * Get the h s3.
     *
     * @return float Returns the h s3.
     */
    public function getHS3() {
        return $this->hS3;
    }

    /**
     * Get the h s35 heures.
     *
     * @return float Returns the h s35 heures.
     */
    public function getHS35Heures() {
        return $this->hS35Heures;
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
     * Get the heures r c acquises.
     *
     * @return float Returns the heures r c acquises.
     */
    public function getHeuresRCAcquises() {
        return $this->heuresRCAcquises;
    }

    /**
     * Get the heures r r acquises.
     *
     * @return float Returns the heures r r acquises.
     */
    public function getHeuresRRAcquises() {
        return $this->heuresRRAcquises;
    }

    /**
     * Get the j a c p.
     *
     * @return int Returns the j a c p.
     */
    public function getJACP() {
        return $this->jACP;
    }

    /**
     * Get the jours r t t acquis.
     *
     * @return float Returns the jours r t t acquis.
     */
    public function getJoursRTTAcquis() {
        return $this->joursRTTAcquis;
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
     * Get the nb heures r s.
     *
     * @return float Returns the nb heures r s.
     */
    public function getNbHeuresRS() {
        return $this->nbHeuresRS;
    }

    /**
     * Get the nb heures t p.
     *
     * @return float Returns the nb heures t p.
     */
    public function getNbHeuresTP() {
        return $this->nbHeuresTP;
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
     * @return DateTime Returns the periode.
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
     * Get the prime j f2 normal.
     *
     * @return float Returns the prime j f2 normal.
     */
    public function getPrimeJF2Normal() {
        return $this->primeJF2Normal;
    }

    /**
     * Get the prime j f except.
     *
     * @return float Returns the prime j f except.
     */
    public function getPrimeJFExcept() {
        return $this->primeJFExcept;
    }

    /**
     * Get the prime j f normal.
     *
     * @return float Returns the prime j f normal.
     */
    public function getPrimeJFNormal() {
        return $this->primeJFNormal;
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
     * Get the tx horaire r s.
     *
     * @return float Returns the tx horaire r s.
     */
    public function getTxHoraireRS() {
        return $this->txHoraireRS;
    }

    /**
     * Get the tx horaire t p.
     *
     * @return float Returns the tx horaire t p.
     */
    public function getTxHoraireTP() {
        return $this->txHoraireTP;
    }

    /**
     * Get the ya eu saisie manuelle.
     *
     * @return boolean Returns the ya eu saisie manuelle.
     */
    public function getYaEuSaisieManuelle() {
        return $this->yaEuSaisieManuelle;
    }

    /**
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the contingent h sup repos comp.
     *
     * @param float $contingentHSupReposComp The contingent h sup repos comp.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setContingentHSupReposComp($contingentHSupReposComp) {
        $this->contingentHSupReposComp = $contingentHSupReposComp;
        return $this;
    }

    /**
     * Set the droit c p.
     *
     * @param float $droitCP The droit c p.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setDroitCP($droitCP) {
        $this->droitCP = $droitCP;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string $etat The etat.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the h a b s0.
     *
     * @param float $hABS0 The h a b s0.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setHABS0($hABS0) {
        $this->hABS0 = $hABS0;
        return $this;
    }

    /**
     * Set the h a b s1.
     *
     * @param float $hABS1 The h a b s1.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setHABS1($hABS1) {
        $this->hABS1 = $hABS1;
        return $this;
    }

    /**
     * Set the h a b s2.
     *
     * @param float $hABS2 The h a b s2.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setHABS2($hABS2) {
        $this->hABS2 = $hABS2;
        return $this;
    }

    /**
     * Set the h a b s3.
     *
     * @param float $hABS3 The h a b s3.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setHABS3($hABS3) {
        $this->hABS3 = $hABS3;
        return $this;
    }

    /**
     * Set the h a b s4.
     *
     * @param float $hABS4 The h a b s4.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setHABS4($hABS4) {
        $this->hABS4 = $hABS4;
        return $this;
    }

    /**
     * Set the h a b s5.
     *
     * @param float $hABS5 The h a b s5.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setHABS5($hABS5) {
        $this->hABS5 = $hABS5;
        return $this;
    }

    /**
     * Set the h a b s6.
     *
     * @param float $hABS6 The h a b s6.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setHABS6($hABS6) {
        $this->hABS6 = $hABS6;
        return $this;
    }

    /**
     * Set the h a b s7.
     *
     * @param float $hABS7 The h a b s7.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setHABS7($hABS7) {
        $this->hABS7 = $hABS7;
        return $this;
    }

    /**
     * Set the h a b s8.
     *
     * @param float $hABS8 The h a b s8.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setHABS8($hABS8) {
        $this->hABS8 = $hABS8;
        return $this;
    }

    /**
     * Set the h a b s9.
     *
     * @param float $hABS9 The h a b s9.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setHABS9($hABS9) {
        $this->hABS9 = $hABS9;
        return $this;
    }

    /**
     * Set the h a c p.
     *
     * @param float $hACP The h a c p.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setHACP($hACP) {
        $this->hACP = $hACP;
        return $this;
    }

    /**
     * Set the h c.
     *
     * @param float $hC The h c.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setHC($hC) {
        $this->hC = $hC;
        return $this;
    }

    /**
     * Set the h prev.
     *
     * @param float $hPrev The h prev.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setHPrev($hPrev) {
        $this->hPrev = $hPrev;
        return $this;
    }

    /**
     * Set the h rempl.
     *
     * @param float $hRempl The h rempl.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setHRempl($hRempl) {
        $this->hRempl = $hRempl;
        return $this;
    }

    /**
     * Set the h s1.
     *
     * @param float $hS1 The h s1.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setHS1($hS1) {
        $this->hS1 = $hS1;
        return $this;
    }

    /**
     * Set the h s2.
     *
     * @param float $hS2 The h s2.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setHS2($hS2) {
        $this->hS2 = $hS2;
        return $this;
    }

    /**
     * Set the h s3.
     *
     * @param float $hS3 The h s3.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setHS3($hS3) {
        $this->hS3 = $hS3;
        return $this;
    }

    /**
     * Set the h s35 heures.
     *
     * @param float $hS35Heures The h s35 heures.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setHS35Heures($hS35Heures) {
        $this->hS35Heures = $hS35Heures;
        return $this;
    }

    /**
     * Set the h surcroit.
     *
     * @param float $hSurcroit The h surcroit.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setHSurcroit($hSurcroit) {
        $this->hSurcroit = $hSurcroit;
        return $this;
    }

    /**
     * Set the heures r c acquises.
     *
     * @param float $heuresRCAcquises The heures r c acquises.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setHeuresRCAcquises($heuresRCAcquises) {
        $this->heuresRCAcquises = $heuresRCAcquises;
        return $this;
    }

    /**
     * Set the heures r r acquises.
     *
     * @param float $heuresRRAcquises The heures r r acquises.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setHeuresRRAcquises($heuresRRAcquises) {
        $this->heuresRRAcquises = $heuresRRAcquises;
        return $this;
    }

    /**
     * Set the j a c p.
     *
     * @param int $jACP The j a c p.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setJACP($jACP) {
        $this->jACP = $jACP;
        return $this;
    }

    /**
     * Set the jours r t t acquis.
     *
     * @param float $joursRTTAcquis The jours r t t acquis.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setJoursRTTAcquis($joursRTTAcquis) {
        $this->joursRTTAcquis = $joursRTTAcquis;
        return $this;
    }

    /**
     * Set the mensualisation.
     *
     * @param float $mensualisation The mensualisation.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setMensualisation($mensualisation) {
        $this->mensualisation = $mensualisation;
        return $this;
    }

    /**
     * Set the mt prime1 chantier.
     *
     * @param float $mtPrime1Chantier The mt prime1 chantier.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setMtPrime1Chantier($mtPrime1Chantier) {
        $this->mtPrime1Chantier = $mtPrime1Chantier;
        return $this;
    }

    /**
     * Set the mt prime2 chantier.
     *
     * @param float $mtPrime2Chantier The mt prime2 chantier.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setMtPrime2Chantier($mtPrime2Chantier) {
        $this->mtPrime2Chantier = $mtPrime2Chantier;
        return $this;
    }

    /**
     * Set the mt prime3 chantier.
     *
     * @param float $mtPrime3Chantier The mt prime3 chantier.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setMtPrime3Chantier($mtPrime3Chantier) {
        $this->mtPrime3Chantier = $mtPrime3Chantier;
        return $this;
    }

    /**
     * Set the mt prime forfait.
     *
     * @param float $mtPrimeForfait The mt prime forfait.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setMtPrimeForfait($mtPrimeForfait) {
        $this->mtPrimeForfait = $mtPrimeForfait;
        return $this;
    }

    /**
     * Set the nb heures r s.
     *
     * @param float $nbHeuresRS The nb heures r s.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setNbHeuresRS($nbHeuresRS) {
        $this->nbHeuresRS = $nbHeuresRS;
        return $this;
    }

    /**
     * Set the nb heures t p.
     *
     * @param float $nbHeuresTP The nb heures t p.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setNbHeuresTP($nbHeuresTP) {
        $this->nbHeuresTP = $nbHeuresTP;
        return $this;
    }

    /**
     * Set the nb paniers.
     *
     * @param float $nbPaniers The nb paniers.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setNbPaniers($nbPaniers) {
        $this->nbPaniers = $nbPaniers;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime $periode The periode.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the prime1.
     *
     * @param float $prime1 The prime1.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setPrime1($prime1) {
        $this->prime1 = $prime1;
        return $this;
    }

    /**
     * Set the prime10.
     *
     * @param float $prime10 The prime10.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setPrime10($prime10) {
        $this->prime10 = $prime10;
        return $this;
    }

    /**
     * Set the prime1 mai.
     *
     * @param float $prime1Mai The prime1 mai.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setPrime1Mai($prime1Mai) {
        $this->prime1Mai = $prime1Mai;
        return $this;
    }

    /**
     * Set the prime2.
     *
     * @param float $prime2 The prime2.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setPrime2($prime2) {
        $this->prime2 = $prime2;
        return $this;
    }

    /**
     * Set the prime3.
     *
     * @param float $prime3 The prime3.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setPrime3($prime3) {
        $this->prime3 = $prime3;
        return $this;
    }

    /**
     * Set the prime4.
     *
     * @param float $prime4 The prime4.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setPrime4($prime4) {
        $this->prime4 = $prime4;
        return $this;
    }

    /**
     * Set the prime5.
     *
     * @param float $prime5 The prime5.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setPrime5($prime5) {
        $this->prime5 = $prime5;
        return $this;
    }

    /**
     * Set the prime6.
     *
     * @param float $prime6 The prime6.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setPrime6($prime6) {
        $this->prime6 = $prime6;
        return $this;
    }

    /**
     * Set the prime7.
     *
     * @param float $prime7 The prime7.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setPrime7($prime7) {
        $this->prime7 = $prime7;
        return $this;
    }

    /**
     * Set the prime8.
     *
     * @param float $prime8 The prime8.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setPrime8($prime8) {
        $this->prime8 = $prime8;
        return $this;
    }

    /**
     * Set the prime9.
     *
     * @param float $prime9 The prime9.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setPrime9($prime9) {
        $this->prime9 = $prime9;
        return $this;
    }

    /**
     * Set the prime h compl maj.
     *
     * @param float $primeHComplMaj The prime h compl maj.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setPrimeHComplMaj($primeHComplMaj) {
        $this->primeHComplMaj = $primeHComplMaj;
        return $this;
    }

    /**
     * Set the prime h dim2 normal.
     *
     * @param float $primeHDim2Normal The prime h dim2 normal.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setPrimeHDim2Normal($primeHDim2Normal) {
        $this->primeHDim2Normal = $primeHDim2Normal;
        return $this;
    }

    /**
     * Set the prime h dim except.
     *
     * @param float $primeHDimExcept The prime h dim except.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setPrimeHDimExcept($primeHDimExcept) {
        $this->primeHDimExcept = $primeHDimExcept;
        return $this;
    }

    /**
     * Set the prime h dim normal.
     *
     * @param float $primeHDimNormal The prime h dim normal.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setPrimeHDimNormal($primeHDimNormal) {
        $this->primeHDimNormal = $primeHDimNormal;
        return $this;
    }

    /**
     * Set the prime h nuit2 normal.
     *
     * @param float $primeHNuit2Normal The prime h nuit2 normal.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setPrimeHNuit2Normal($primeHNuit2Normal) {
        $this->primeHNuit2Normal = $primeHNuit2Normal;
        return $this;
    }

    /**
     * Set the prime h nuit except.
     *
     * @param float $primeHNuitExcept The prime h nuit except.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setPrimeHNuitExcept($primeHNuitExcept) {
        $this->primeHNuitExcept = $primeHNuitExcept;
        return $this;
    }

    /**
     * Set the prime h nuit normal.
     *
     * @param float $primeHNuitNormal The prime h nuit normal.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setPrimeHNuitNormal($primeHNuitNormal) {
        $this->primeHNuitNormal = $primeHNuitNormal;
        return $this;
    }

    /**
     * Set the prime j f2 normal.
     *
     * @param float $primeJF2Normal The prime j f2 normal.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setPrimeJF2Normal($primeJF2Normal) {
        $this->primeJF2Normal = $primeJF2Normal;
        return $this;
    }

    /**
     * Set the prime j f except.
     *
     * @param float $primeJFExcept The prime j f except.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setPrimeJFExcept($primeJFExcept) {
        $this->primeJFExcept = $primeJFExcept;
        return $this;
    }

    /**
     * Set the prime j f normal.
     *
     * @param float $primeJFNormal The prime j f normal.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setPrimeJFNormal($primeJFNormal) {
        $this->primeJFNormal = $primeJFNormal;
        return $this;
    }

    /**
     * Set the temps passe.
     *
     * @param float $tempsPasse The temps passe.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setTempsPasse($tempsPasse) {
        $this->tempsPasse = $tempsPasse;
        return $this;
    }

    /**
     * Set the total h anal.
     *
     * @param float $totalHAnal The total h anal.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setTotalHAnal($totalHAnal) {
        $this->totalHAnal = $totalHAnal;
        return $this;
    }

    /**
     * Set the tx horaire r s.
     *
     * @param float $txHoraireRS The tx horaire r s.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setTxHoraireRS($txHoraireRS) {
        $this->txHoraireRS = $txHoraireRS;
        return $this;
    }

    /**
     * Set the tx horaire t p.
     *
     * @param float $txHoraireTP The tx horaire t p.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setTxHoraireTP($txHoraireTP) {
        $this->txHoraireTP = $txHoraireTP;
        return $this;
    }

    /**
     * Set the ya eu saisie manuelle.
     *
     * @param boolean $yaEuSaisieManuelle The ya eu saisie manuelle.
     * @return HistoPrepPaie Returns this histo prep paie.
     */
    public function setYaEuSaisieManuelle($yaEuSaisieManuelle) {
        $this->yaEuSaisieManuelle = $yaEuSaisieManuelle;
        return $this;
    }

}
