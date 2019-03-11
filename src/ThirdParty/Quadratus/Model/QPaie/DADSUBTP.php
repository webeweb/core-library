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
 * D a d s u b t p model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class DADSUBTP {

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Code organisme.
     *
     * @var string
     */
    private $codeOrganisme;

    /**
     * Code temps arret.
     *
     * @var string
     */
    private $codeTempsArret;

    /**
     * Debut periode.
     *
     * @var DateTime
     */
    private $debutPeriode;

    /**
     * Fin periode.
     *
     * @var DateTime
     */
    private $finPeriode;

    /**
     * Montant employeur.
     *
     * @var float
     */
    private $montantEmployeur;

    /**
     * Numero.
     *
     * @var string
     */
    private $numero;

    /**
     * Numero ordre.
     *
     * @var int
     */
    private $numeroOrdre;

    /**
     * Qualif unite temps.
     *
     * @var string
     */
    private $qualifUniteTemps;

    /**
     * Temps arret.
     *
     * @var float
     */
    private $tempsArret;

    /**
     * Type arret.
     *
     * @var string
     */
    private $typeArret;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * Get the code organisme.
     *
     * @return string Returns the code organisme.
     */
    public function getCodeOrganisme() {
        return $this->codeOrganisme;
    }

    /**
     * Get the code temps arret.
     *
     * @return string Returns the code temps arret.
     */
    public function getCodeTempsArret() {
        return $this->codeTempsArret;
    }

    /**
     * Get the debut periode.
     *
     * @return DateTime Returns the debut periode.
     */
    public function getDebutPeriode() {
        return $this->debutPeriode;
    }

    /**
     * Get the fin periode.
     *
     * @return DateTime Returns the fin periode.
     */
    public function getFinPeriode() {
        return $this->finPeriode;
    }

    /**
     * Get the montant employeur.
     *
     * @return float Returns the montant employeur.
     */
    public function getMontantEmployeur() {
        return $this->montantEmployeur;
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
     * Get the numero ordre.
     *
     * @return int Returns the numero ordre.
     */
    public function getNumeroOrdre() {
        return $this->numeroOrdre;
    }

    /**
     * Get the qualif unite temps.
     *
     * @return string Returns the qualif unite temps.
     */
    public function getQualifUniteTemps() {
        return $this->qualifUniteTemps;
    }

    /**
     * Get the temps arret.
     *
     * @return float Returns the temps arret.
     */
    public function getTempsArret() {
        return $this->tempsArret;
    }

    /**
     * Get the type arret.
     *
     * @return string Returns the type arret.
     */
    public function getTypeArret() {
        return $this->typeArret;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return DADSUBTP Returns this d a d s u b t p.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string $codeOrganisme The code organisme.
     * @return DADSUBTP Returns this d a d s u b t p.
     */
    public function setCodeOrganisme($codeOrganisme) {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the code temps arret.
     *
     * @param string $codeTempsArret The code temps arret.
     * @return DADSUBTP Returns this d a d s u b t p.
     */
    public function setCodeTempsArret($codeTempsArret) {
        $this->codeTempsArret = $codeTempsArret;
        return $this;
    }

    /**
     * Set the debut periode.
     *
     * @param DateTime $debutPeriode The debut periode.
     * @return DADSUBTP Returns this d a d s u b t p.
     */
    public function setDebutPeriode(DateTime $debutPeriode = null) {
        $this->debutPeriode = $debutPeriode;
        return $this;
    }

    /**
     * Set the fin periode.
     *
     * @param DateTime $finPeriode The fin periode.
     * @return DADSUBTP Returns this d a d s u b t p.
     */
    public function setFinPeriode(DateTime $finPeriode = null) {
        $this->finPeriode = $finPeriode;
        return $this;
    }

    /**
     * Set the montant employeur.
     *
     * @param float $montantEmployeur The montant employeur.
     * @return DADSUBTP Returns this d a d s u b t p.
     */
    public function setMontantEmployeur($montantEmployeur) {
        $this->montantEmployeur = $montantEmployeur;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string $numero The numero.
     * @return DADSUBTP Returns this d a d s u b t p.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero ordre.
     *
     * @param int $numeroOrdre The numero ordre.
     * @return DADSUBTP Returns this d a d s u b t p.
     */
    public function setNumeroOrdre($numeroOrdre) {
        $this->numeroOrdre = $numeroOrdre;
        return $this;
    }

    /**
     * Set the qualif unite temps.
     *
     * @param string $qualifUniteTemps The qualif unite temps.
     * @return DADSUBTP Returns this d a d s u b t p.
     */
    public function setQualifUniteTemps($qualifUniteTemps) {
        $this->qualifUniteTemps = $qualifUniteTemps;
        return $this;
    }

    /**
     * Set the temps arret.
     *
     * @param float $tempsArret The temps arret.
     * @return DADSUBTP Returns this d a d s u b t p.
     */
    public function setTempsArret($tempsArret) {
        $this->tempsArret = $tempsArret;
        return $this;
    }

    /**
     * Set the type arret.
     *
     * @param string $typeArret The type arret.
     * @return DADSUBTP Returns this d a d s u b t p.
     */
    public function setTypeArret($typeArret) {
        $this->typeArret = $typeArret;
        return $this;
    }
}
