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
 * Dadsu retraite lignes contrat.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class DadsuRetraiteLignesContrat {

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
     * Designation commerciale.
     *
     * @var string
     */
    private $designationCommerciale;

    /**
     * Ref contrat.
     *
     * @var string
     */
    private $refContrat;

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
     * Get the designation commerciale.
     *
     * @return string Returns the designation commerciale.
     */
    public function getDesignationCommerciale() {
        return $this->designationCommerciale;
    }

    /**
     * Get the ref contrat.
     *
     * @return string Returns the ref contrat.
     */
    public function getRefContrat() {
        return $this->refContrat;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
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
     * Set the designation commerciale.
     *
     * @param string $designationCommerciale The designation commerciale.
     */
    public function setDesignationCommerciale($designationCommerciale) {
        $this->designationCommerciale = $designationCommerciale;
        return $this;
    }

    /**
     * Set the ref contrat.
     *
     * @param string $refContrat The ref contrat.
     */
    public function setRefContrat($refContrat) {
        $this->refContrat = $refContrat;
        return $this;
    }
}
