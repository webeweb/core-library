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
 * Dadsu prev.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class DadsuPrev {

    /**
     * Base prev.
     *
     * @var float
     */
    private $basePrev;

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
     * Code organisme gestionnaire.
     *
     * @var string
     */
    private $codeOrganismeGestionnaire;

    /**
     * Code popul.
     *
     * @var string
     */
    private $codePopul;

    /**
     * Code type prev.
     *
     * @var string
     */
    private $codeTypePrev;

    /**
     * Debut periode.
     *
     * @var DateTime|null
     */
    private $debutPeriode;

    /**
     * Even contrat.
     *
     * @var string
     */
    private $evenContrat;

    /**
     * Fin periode.
     *
     * @var DateTime|null
     */
    private $finPeriode;

    /**
     * Id institution.
     *
     * @var string
     */
    private $idInstitution;

    /**
     * Indice dadsu.
     *
     * @var int
     */
    private $indiceDadsu;

    /**
     * No affiliation.
     *
     * @var string
     */
    private $noAffiliation;

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
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the base prev.
     *
     * @return float Returns the base prev.
     */
    public function getBasePrev() {
        return $this->basePrev;
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
     * Get the code organisme gestionnaire.
     *
     * @return string Returns the code organisme gestionnaire.
     */
    public function getCodeOrganismeGestionnaire() {
        return $this->codeOrganismeGestionnaire;
    }

    /**
     * Get the code popul.
     *
     * @return string Returns the code popul.
     */
    public function getCodePopul() {
        return $this->codePopul;
    }

    /**
     * Get the code type prev.
     *
     * @return string Returns the code type prev.
     */
    public function getCodeTypePrev() {
        return $this->codeTypePrev;
    }

    /**
     * Get the debut periode.
     *
     * @return DateTime|null Returns the debut periode.
     */
    public function getDebutPeriode() {
        return $this->debutPeriode;
    }

    /**
     * Get the even contrat.
     *
     * @return string Returns the even contrat.
     */
    public function getEvenContrat() {
        return $this->evenContrat;
    }

    /**
     * Get the fin periode.
     *
     * @return DateTime|null Returns the fin periode.
     */
    public function getFinPeriode() {
        return $this->finPeriode;
    }

    /**
     * Get the id institution.
     *
     * @return string Returns the id institution.
     */
    public function getIdInstitution() {
        return $this->idInstitution;
    }

    /**
     * Get the indice dadsu.
     *
     * @return int Returns the indice dadsu.
     */
    public function getIndiceDadsu() {
        return $this->indiceDadsu;
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
     * Set the base prev.
     *
     * @param float $basePrev The base prev.
     * @return DadsuPrev Returns this Dadsu prev.
     */
    public function setBasePrev($basePrev) {
        $this->basePrev = $basePrev;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return DadsuPrev Returns this Dadsu prev.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string $codeOrganisme The code organisme.
     * @return DadsuPrev Returns this Dadsu prev.
     */
    public function setCodeOrganisme($codeOrganisme) {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the code organisme gestionnaire.
     *
     * @param string $codeOrganismeGestionnaire The code organisme gestionnaire.
     * @return DadsuPrev Returns this Dadsu prev.
     */
    public function setCodeOrganismeGestionnaire($codeOrganismeGestionnaire) {
        $this->codeOrganismeGestionnaire = $codeOrganismeGestionnaire;
        return $this;
    }

    /**
     * Set the code popul.
     *
     * @param string $codePopul The code popul.
     * @return DadsuPrev Returns this Dadsu prev.
     */
    public function setCodePopul($codePopul) {
        $this->codePopul = $codePopul;
        return $this;
    }

    /**
     * Set the code type prev.
     *
     * @param string $codeTypePrev The code type prev.
     * @return DadsuPrev Returns this Dadsu prev.
     */
    public function setCodeTypePrev($codeTypePrev) {
        $this->codeTypePrev = $codeTypePrev;
        return $this;
    }

    /**
     * Set the debut periode.
     *
     * @param DateTime|null $debutPeriode The debut periode.
     * @return DadsuPrev Returns this Dadsu prev.
     */
    public function setDebutPeriode(DateTime $debutPeriode = null) {
        $this->debutPeriode = $debutPeriode;
        return $this;
    }

    /**
     * Set the even contrat.
     *
     * @param string $evenContrat The even contrat.
     * @return DadsuPrev Returns this Dadsu prev.
     */
    public function setEvenContrat($evenContrat) {
        $this->evenContrat = $evenContrat;
        return $this;
    }

    /**
     * Set the fin periode.
     *
     * @param DateTime|null $finPeriode The fin periode.
     * @return DadsuPrev Returns this Dadsu prev.
     */
    public function setFinPeriode(DateTime $finPeriode = null) {
        $this->finPeriode = $finPeriode;
        return $this;
    }

    /**
     * Set the id institution.
     *
     * @param string $idInstitution The id institution.
     * @return DadsuPrev Returns this Dadsu prev.
     */
    public function setIdInstitution($idInstitution) {
        $this->idInstitution = $idInstitution;
        return $this;
    }

    /**
     * Set the indice dadsu.
     *
     * @param int $indiceDadsu The indice dadsu.
     * @return DadsuPrev Returns this Dadsu prev.
     */
    public function setIndiceDadsu($indiceDadsu) {
        $this->indiceDadsu = $indiceDadsu;
        return $this;
    }

    /**
     * Set the no affiliation.
     *
     * @param string $noAffiliation The no affiliation.
     * @return DadsuPrev Returns this Dadsu prev.
     */
    public function setNoAffiliation($noAffiliation) {
        $this->noAffiliation = $noAffiliation;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string $numero The numero.
     * @return DadsuPrev Returns this Dadsu prev.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero ordre.
     *
     * @param int $numeroOrdre The numero ordre.
     * @return DadsuPrev Returns this Dadsu prev.
     */
    public function setNumeroOrdre($numeroOrdre) {
        $this->numeroOrdre = $numeroOrdre;
        return $this;
    }
}
