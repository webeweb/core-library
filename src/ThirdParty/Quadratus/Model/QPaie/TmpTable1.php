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
 * Tmp table1.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class TmpTable1 {

    /**
     * Classe.
     *
     * @var string
     */
    private $classe;

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
     * Indice periode.
     *
     * @var int
     */
    private $indicePeriode;

    /**
     * Inverse.
     *
     * @var bool
     */
    private $inverse;

    /**
     * Periode.
     *
     * @var DateTime|null
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
     * Type.
     *
     * @var int
     */
    private $type;

    /**
     * Valeur.
     *
     * @var float
     */
    private $valeur;

    /**
     * Valeur tot.
     *
     * @var float
     */
    private $valeurTot;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * @return bool Returns the inverse.
     */
    public function getInverse() {
        return $this->inverse;
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
     * Get the type.
     *
     * @return int Returns the type.
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Get the valeur.
     *
     * @return float Returns the valeur.
     */
    public function getValeur() {
        return $this->valeur;
    }

    /**
     * Get the valeur tot.
     *
     * @return float Returns the valeur tot.
     */
    public function getValeurTot() {
        return $this->valeurTot;
    }

    /**
     * Set the classe.
     *
     * @param string $classe The classe.
     */
    public function setClasse($classe) {
        $this->classe = $classe;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string $codeOrganisme The code organisme.
     */
    public function setCodeOrganisme($codeOrganisme) {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the etablissement.
     *
     * @param int $etablissement The etablissement.
     */
    public function setEtablissement($etablissement) {
        $this->etablissement = $etablissement;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int $indicePeriode The indice periode.
     */
    public function setIndicePeriode($indicePeriode) {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the inverse.
     *
     * @param bool $inverse The inverse.
     */
    public function setInverse($inverse) {
        $this->inverse = $inverse;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the qui.
     *
     * @param int $qui The qui.
     */
    public function setQui($qui) {
        $this->qui = $qui;
        return $this;
    }

    /**
     * Set the service.
     *
     * @param string $service The service.
     */
    public function setService($service) {
        $this->service = $service;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param int $type The type.
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Set the valeur.
     *
     * @param float $valeur The valeur.
     */
    public function setValeur($valeur) {
        $this->valeur = $valeur;
        return $this;
    }

    /**
     * Set the valeur tot.
     *
     * @param float $valeurTot The valeur tot.
     */
    public function setValeurTot($valeurTot) {
        $this->valeurTot = $valeurTot;
        return $this;
    }
}
