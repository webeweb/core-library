<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

/**
 * Info statistiques model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class InfoStatistiques {

    /**
     * A facturer hors ex.
     *
     * @var int
     */
    private $aFacturerHorsEx;

    /**
     * A facturer sur ex.
     *
     * @var int
     */
    private $aFacturerSurEx;

    /**
     * Code element.
     *
     * @var int
     */
    private $codeElement;

    /**
     * Compteur hors ex.
     *
     * @var int
     */
    private $compteurHorsEx;

    /**
     * Compteur sur ex.
     *
     * @var int
     */
    private $compteurSurEx;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the a facturer hors ex.
     *
     * @return int Returns the a facturer hors ex.
     */
    public function getAFacturerHorsEx() {
        return $this->aFacturerHorsEx;
    }

    /**
     * Get the a facturer sur ex.
     *
     * @return int Returns the a facturer sur ex.
     */
    public function getAFacturerSurEx() {
        return $this->aFacturerSurEx;
    }

    /**
     * Get the code element.
     *
     * @return int Returns the code element.
     */
    public function getCodeElement() {
        return $this->codeElement;
    }

    /**
     * Get the compteur hors ex.
     *
     * @return int Returns the compteur hors ex.
     */
    public function getCompteurHorsEx() {
        return $this->compteurHorsEx;
    }

    /**
     * Get the compteur sur ex.
     *
     * @return int Returns the compteur sur ex.
     */
    public function getCompteurSurEx() {
        return $this->compteurSurEx;
    }

    /**
     * Set the a facturer hors ex.
     *
     * @param int $aFacturerHorsEx The a facturer hors ex.
     * @return InfoStatistiques Returns this info statistiques.
     */
    public function setAFacturerHorsEx($aFacturerHorsEx) {
        $this->aFacturerHorsEx = $aFacturerHorsEx;
        return $this;
    }

    /**
     * Set the a facturer sur ex.
     *
     * @param int $aFacturerSurEx The a facturer sur ex.
     * @return InfoStatistiques Returns this info statistiques.
     */
    public function setAFacturerSurEx($aFacturerSurEx) {
        $this->aFacturerSurEx = $aFacturerSurEx;
        return $this;
    }

    /**
     * Set the code element.
     *
     * @param int $codeElement The code element.
     * @return InfoStatistiques Returns this info statistiques.
     */
    public function setCodeElement($codeElement) {
        $this->codeElement = $codeElement;
        return $this;
    }

    /**
     * Set the compteur hors ex.
     *
     * @param int $compteurHorsEx The compteur hors ex.
     * @return InfoStatistiques Returns this info statistiques.
     */
    public function setCompteurHorsEx($compteurHorsEx) {
        $this->compteurHorsEx = $compteurHorsEx;
        return $this;
    }

    /**
     * Set the compteur sur ex.
     *
     * @param int $compteurSurEx The compteur sur ex.
     * @return InfoStatistiques Returns this info statistiques.
     */
    public function setCompteurSurEx($compteurSurEx) {
        $this->compteurSurEx = $compteurSurEx;
        return $this;
    }
}
