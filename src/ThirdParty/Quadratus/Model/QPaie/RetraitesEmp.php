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

/**
 * Retraites emp.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class RetraitesEmp {

    /**
     * Code organisme.
     *
     * @var string
     */
    private $codeOrganisme;

    /**
     * Id institution.
     *
     * @var string
     */
    private $idInstitution;

    /**
     * Indice contrat.
     *
     * @var int
     */
    private $indiceContrat;

    /**
     * Non gere.
     *
     * @var bool
     */
    private $nonGere;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Type orga.
     *
     * @var string
     */
    private $typeOrga;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * Get the id institution.
     *
     * @return string Returns the id institution.
     */
    public function getIdInstitution() {
        return $this->idInstitution;
    }

    /**
     * Get the indice contrat.
     *
     * @return int Returns the indice contrat.
     */
    public function getIndiceContrat() {
        return $this->indiceContrat;
    }

    /**
     * Get the non gere.
     *
     * @return bool Returns the non gere.
     */
    public function getNonGere() {
        return $this->nonGere;
    }

    /**
     * Get the numero employe.
     *
     * @return string Returns the numero employe.
     */
    public function getNumeroEmploye() {
        return $this->numeroEmploye;
    }

    /**
     * Get the type orga.
     *
     * @return string Returns the type orga.
     */
    public function getTypeOrga() {
        return $this->typeOrga;
    }

    /**
     * Set the code organisme.
     *
     * @param string $codeOrganisme The code organisme.
     * @return RetraitesEmp Returns this Retraites emp.
     */
    public function setCodeOrganisme($codeOrganisme) {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the id institution.
     *
     * @param string $idInstitution The id institution.
     * @return RetraitesEmp Returns this Retraites emp.
     */
    public function setIdInstitution($idInstitution) {
        $this->idInstitution = $idInstitution;
        return $this;
    }

    /**
     * Set the indice contrat.
     *
     * @param int $indiceContrat The indice contrat.
     * @return RetraitesEmp Returns this Retraites emp.
     */
    public function setIndiceContrat($indiceContrat) {
        $this->indiceContrat = $indiceContrat;
        return $this;
    }

    /**
     * Set the non gere.
     *
     * @param bool $nonGere The non gere.
     * @return RetraitesEmp Returns this Retraites emp.
     */
    public function setNonGere($nonGere) {
        $this->nonGere = $nonGere;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return RetraitesEmp Returns this Retraites emp.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the type orga.
     *
     * @param string $typeOrga The type orga.
     * @return RetraitesEmp Returns this Retraites emp.
     */
    public function setTypeOrga($typeOrga) {
        $this->typeOrga = $typeOrga;
        return $this;
    }
}
