<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

/**
 * Qualifiants.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Qualifiants {

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Colonne.
     *
     * @var int
     */
    private $colonne;

    /**
     * Visu appels.
     *
     * @var bool
     */
    private $visuAppels;

    /**
     * Visu documents.
     *
     * @var bool
     */
    private $visuDocuments;

    /**
     * Visu evenements.
     *
     * @var bool
     */
    private $visuEvenements;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * Get the colonne.
     *
     * @return int Returns the colonne.
     */
    public function getColonne() {
        return $this->colonne;
    }

    /**
     * Get the visu appels.
     *
     * @return bool Returns the visu appels.
     */
    public function getVisuAppels() {
        return $this->visuAppels;
    }

    /**
     * Get the visu documents.
     *
     * @return bool Returns the visu documents.
     */
    public function getVisuDocuments() {
        return $this->visuDocuments;
    }

    /**
     * Get the visu evenements.
     *
     * @return bool Returns the visu evenements.
     */
    public function getVisuEvenements() {
        return $this->visuEvenements;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return Qualifiants Returns this Qualifiants.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the colonne.
     *
     * @param int $colonne The colonne.
     * @return Qualifiants Returns this Qualifiants.
     */
    public function setColonne($colonne) {
        $this->colonne = $colonne;
        return $this;
    }

    /**
     * Set the visu appels.
     *
     * @param bool $visuAppels The visu appels.
     * @return Qualifiants Returns this Qualifiants.
     */
    public function setVisuAppels($visuAppels) {
        $this->visuAppels = $visuAppels;
        return $this;
    }

    /**
     * Set the visu documents.
     *
     * @param bool $visuDocuments The visu documents.
     * @return Qualifiants Returns this Qualifiants.
     */
    public function setVisuDocuments($visuDocuments) {
        $this->visuDocuments = $visuDocuments;
        return $this;
    }

    /**
     * Set the visu evenements.
     *
     * @param bool $visuEvenements The visu evenements.
     * @return Qualifiants Returns this Qualifiants.
     */
    public function setVisuEvenements($visuEvenements) {
        $this->visuEvenements = $visuEvenements;
        return $this;
    }
}
