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
 * Tmp table0 model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class TmpTable0 {

    /**
     * Base.
     *
     * @var float
     */
    private $base;

    /**
     * Base tot.
     *
     * @var float
     */
    private $baseTot;

    /**
     * Charge pat.
     *
     * @var float
     */
    private $chargePat;

    /**
     * Charge pat tot.
     *
     * @var float
     */
    private $chargePatTot;

    /**
     * Charge sal.
     *
     * @var float
     */
    private $chargeSal;

    /**
     * Charge sal tot.
     *
     * @var float
     */
    private $chargeSalTot;

    /**
     * Classe.
     *
     * @var string
     */
    private $classe;

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Code organisme.
     *
     * @var string
     */
    private $codeOrganisme;

    /**
     * Etablissement.
     *
     * @var int
     */
    private $etablissement;

    /**
     * Imputation.
     *
     * @var boolean
     */
    private $imputation;

    /**
     * Indice periode.
     *
     * @var int
     */
    private $indicePeriode;

    /**
     * Inverse.
     *
     * @var boolean
     */
    private $inverse;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Numero.
     *
     * @var string
     */
    private $numero;

    /**
     * Periode.
     *
     * @var DateTime
     */
    private $periode;

    /**
     * Qui.
     *
     * @var int
     */
    private $qui;

    /**
     * Service.
     *
     * @var string
     */
    private $service;

    /**
     * Taux pat.
     *
     * @var float
     */
    private $tauxPat;

    /**
     * Taux sal.
     *
     * @var float
     */
    private $tauxSal;

    /**
     * Type.
     *
     * @var int
     */
    private $type;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the base.
     *
     * @return float Returns the base.
     */
    public function getBase() {
        return $this->base;
    }

    /**
     * Get the base tot.
     *
     * @return float Returns the base tot.
     */
    public function getBaseTot() {
        return $this->baseTot;
    }

    /**
     * Get the charge pat.
     *
     * @return float Returns the charge pat.
     */
    public function getChargePat() {
        return $this->chargePat;
    }

    /**
     * Get the charge pat tot.
     *
     * @return float Returns the charge pat tot.
     */
    public function getChargePatTot() {
        return $this->chargePatTot;
    }

    /**
     * Get the charge sal.
     *
     * @return float Returns the charge sal.
     */
    public function getChargeSal() {
        return $this->chargeSal;
    }

    /**
     * Get the charge sal tot.
     *
     * @return float Returns the charge sal tot.
     */
    public function getChargeSalTot() {
        return $this->chargeSalTot;
    }

    /**
     * Get the classe.
     *
     * @return string Returns the classe.
     */
    public function getClasse() {
        return $this->classe;
    }

    /**
     * Get the code.
     *
     * @return string Returns the code.
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Get the code organisme.
     *
     * @return string Returns the code organisme.
     */
    public function getCodeOrganisme() {
        return $this->codeOrganisme;
    }

    /**
     * Get the etablissement.
     *
     * @return int Returns the etablissement.
     */
    public function getEtablissement() {
        return $this->etablissement;
    }

    /**
     * Get the imputation.
     *
     * @return boolean Returns the imputation.
     */
    public function getImputation() {
        return $this->imputation;
    }

    /**
     * Get the indice periode.
     *
     * @return int Returns the indice periode.
     */
    public function getIndicePeriode() {
        return $this->indicePeriode;
    }

    /**
     * Get the inverse.
     *
     * @return boolean Returns the inverse.
     */
    public function getInverse() {
        return $this->inverse;
    }

    /**
     * Get the libelle.
     *
     * @return string Returns the libelle.
     */
    public function getLibelle() {
        return $this->libelle;
    }

    /**
     * Get the numero.
     *
     * @return string Returns the numero.
     */
    public function getNumero() {
        return $this->numero;
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
     * Get the qui.
     *
     * @return int Returns the qui.
     */
    public function getQui() {
        return $this->qui;
    }

    /**
     * Get the service.
     *
     * @return string Returns the service.
     */
    public function getService() {
        return $this->service;
    }

    /**
     * Get the taux pat.
     *
     * @return float Returns the taux pat.
     */
    public function getTauxPat() {
        return $this->tauxPat;
    }

    /**
     * Get the taux sal.
     *
     * @return float Returns the taux sal.
     */
    public function getTauxSal() {
        return $this->tauxSal;
    }

    /**
     * Get the type.
     *
     * @return int Returns the type.
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set the base.
     *
     * @param float $base The base.
     * @return TmpTable0 Returns this tmp table0.
     */
    public function setBase($base) {
        $this->base = $base;
        return $this;
    }

    /**
     * Set the base tot.
     *
     * @param float $baseTot The base tot.
     * @return TmpTable0 Returns this tmp table0.
     */
    public function setBaseTot($baseTot) {
        $this->baseTot = $baseTot;
        return $this;
    }

    /**
     * Set the charge pat.
     *
     * @param float $chargePat The charge pat.
     * @return TmpTable0 Returns this tmp table0.
     */
    public function setChargePat($chargePat) {
        $this->chargePat = $chargePat;
        return $this;
    }

    /**
     * Set the charge pat tot.
     *
     * @param float $chargePatTot The charge pat tot.
     * @return TmpTable0 Returns this tmp table0.
     */
    public function setChargePatTot($chargePatTot) {
        $this->chargePatTot = $chargePatTot;
        return $this;
    }

    /**
     * Set the charge sal.
     *
     * @param float $chargeSal The charge sal.
     * @return TmpTable0 Returns this tmp table0.
     */
    public function setChargeSal($chargeSal) {
        $this->chargeSal = $chargeSal;
        return $this;
    }

    /**
     * Set the charge sal tot.
     *
     * @param float $chargeSalTot The charge sal tot.
     * @return TmpTable0 Returns this tmp table0.
     */
    public function setChargeSalTot($chargeSalTot) {
        $this->chargeSalTot = $chargeSalTot;
        return $this;
    }

    /**
     * Set the classe.
     *
     * @param string $classe The classe.
     * @return TmpTable0 Returns this tmp table0.
     */
    public function setClasse($classe) {
        $this->classe = $classe;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return TmpTable0 Returns this tmp table0.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string $codeOrganisme The code organisme.
     * @return TmpTable0 Returns this tmp table0.
     */
    public function setCodeOrganisme($codeOrganisme) {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the etablissement.
     *
     * @param int $etablissement The etablissement.
     * @return TmpTable0 Returns this tmp table0.
     */
    public function setEtablissement($etablissement) {
        $this->etablissement = $etablissement;
        return $this;
    }

    /**
     * Set the imputation.
     *
     * @param boolean $imputation The imputation.
     * @return TmpTable0 Returns this tmp table0.
     */
    public function setImputation($imputation) {
        $this->imputation = $imputation;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int $indicePeriode The indice periode.
     * @return TmpTable0 Returns this tmp table0.
     */
    public function setIndicePeriode($indicePeriode) {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the inverse.
     *
     * @param boolean $inverse The inverse.
     * @return TmpTable0 Returns this tmp table0.
     */
    public function setInverse($inverse) {
        $this->inverse = $inverse;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return TmpTable0 Returns this tmp table0.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string $numero The numero.
     * @return TmpTable0 Returns this tmp table0.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime $periode The periode.
     * @return TmpTable0 Returns this tmp table0.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the qui.
     *
     * @param int $qui The qui.
     * @return TmpTable0 Returns this tmp table0.
     */
    public function setQui($qui) {
        $this->qui = $qui;
        return $this;
    }

    /**
     * Set the service.
     *
     * @param string $service The service.
     * @return TmpTable0 Returns this tmp table0.
     */
    public function setService($service) {
        $this->service = $service;
        return $this;
    }

    /**
     * Set the taux pat.
     *
     * @param float $tauxPat The taux pat.
     * @return TmpTable0 Returns this tmp table0.
     */
    public function setTauxPat($tauxPat) {
        $this->tauxPat = $tauxPat;
        return $this;
    }

    /**
     * Set the taux sal.
     *
     * @param float $tauxSal The taux sal.
     * @return TmpTable0 Returns this tmp table0.
     */
    public function setTauxSal($tauxSal) {
        $this->tauxSal = $tauxSal;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param int $type The type.
     * @return TmpTable0 Returns this tmp table0.
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

}
