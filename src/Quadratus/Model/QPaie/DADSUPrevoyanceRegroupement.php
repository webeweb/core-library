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

/**
 * D a d s u prevoyance regroupement model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class DADSUPrevoyanceRegroupement {

    /**
     * Code libelle.
     *
     * @var string
     */
    private $codeLibelle;

    /**
     * Code option.
     *
     * @var string
     */
    private $codeOption;

    /**
     * Code organisme.
     *
     * @var string
     */
    private $codeOrganisme;

    /**
     * Code population.
     *
     * @var string
     */
    private $codePopulation;

    /**
     * Code regroupement.
     *
     * @var string
     */
    private $codeRegroupement;

    /**
     * Ref contrat.
     *
     * @var string
     */
    private $refContrat;

    /**
     * Type cotis.
     *
     * @var string
     */
    private $typeCotis;

    /**
     * Valeur cotis.
     *
     * @var float
     */
    private $valeurCotis;

    /**
     * Valeur cotis initiale.
     *
     * @var float
     */
    private $valeurCotisInitiale;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code libelle.
     *
     * @return string Returns the code libelle.
     */
    public function getCodeLibelle() {
        return $this->codeLibelle;
    }

    /**
     * Get the code option.
     *
     * @return string Returns the code option.
     */
    public function getCodeOption() {
        return $this->codeOption;
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
     * Get the code population.
     *
     * @return string Returns the code population.
     */
    public function getCodePopulation() {
        return $this->codePopulation;
    }

    /**
     * Get the code regroupement.
     *
     * @return string Returns the code regroupement.
     */
    public function getCodeRegroupement() {
        return $this->codeRegroupement;
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
     * Get the type cotis.
     *
     * @return string Returns the type cotis.
     */
    public function getTypeCotis() {
        return $this->typeCotis;
    }

    /**
     * Get the valeur cotis.
     *
     * @return float Returns the valeur cotis.
     */
    public function getValeurCotis() {
        return $this->valeurCotis;
    }

    /**
     * Get the valeur cotis initiale.
     *
     * @return float Returns the valeur cotis initiale.
     */
    public function getValeurCotisInitiale() {
        return $this->valeurCotisInitiale;
    }

    /**
     * Set the code libelle.
     *
     * @param string $codeLibelle The code libelle.
     * @return DADSUPrevoyanceRegroupement Returns this d a d s u prevoyance regroupement.
     */
    public function setCodeLibelle($codeLibelle) {
        $this->codeLibelle = $codeLibelle;
        return $this;
    }

    /**
     * Set the code option.
     *
     * @param string $codeOption The code option.
     * @return DADSUPrevoyanceRegroupement Returns this d a d s u prevoyance regroupement.
     */
    public function setCodeOption($codeOption) {
        $this->codeOption = $codeOption;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string $codeOrganisme The code organisme.
     * @return DADSUPrevoyanceRegroupement Returns this d a d s u prevoyance regroupement.
     */
    public function setCodeOrganisme($codeOrganisme) {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the code population.
     *
     * @param string $codePopulation The code population.
     * @return DADSUPrevoyanceRegroupement Returns this d a d s u prevoyance regroupement.
     */
    public function setCodePopulation($codePopulation) {
        $this->codePopulation = $codePopulation;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string $codeRegroupement The code regroupement.
     * @return DADSUPrevoyanceRegroupement Returns this d a d s u prevoyance regroupement.
     */
    public function setCodeRegroupement($codeRegroupement) {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the ref contrat.
     *
     * @param string $refContrat The ref contrat.
     * @return DADSUPrevoyanceRegroupement Returns this d a d s u prevoyance regroupement.
     */
    public function setRefContrat($refContrat) {
        $this->refContrat = $refContrat;
        return $this;
    }

    /**
     * Set the type cotis.
     *
     * @param string $typeCotis The type cotis.
     * @return DADSUPrevoyanceRegroupement Returns this d a d s u prevoyance regroupement.
     */
    public function setTypeCotis($typeCotis) {
        $this->typeCotis = $typeCotis;
        return $this;
    }

    /**
     * Set the valeur cotis.
     *
     * @param float $valeurCotis The valeur cotis.
     * @return DADSUPrevoyanceRegroupement Returns this d a d s u prevoyance regroupement.
     */
    public function setValeurCotis($valeurCotis) {
        $this->valeurCotis = $valeurCotis;
        return $this;
    }

    /**
     * Set the valeur cotis initiale.
     *
     * @param float $valeurCotisInitiale The valeur cotis initiale.
     * @return DADSUPrevoyanceRegroupement Returns this d a d s u prevoyance regroupement.
     */
    public function setValeurCotisInitiale($valeurCotisInitiale) {
        $this->valeurCotisInitiale = $valeurCotisInitiale;
        return $this;
    }

}
