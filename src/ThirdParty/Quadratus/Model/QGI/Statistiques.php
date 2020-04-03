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
 * Statistiques.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Statistiques {

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code rubrique.
     *
     * @var string
     */
    private $codeRubrique;

    /**
     * Info cellule.
     *
     * @var float
     */
    private $infoCellule;

    /**
     * Millesime.
     *
     * @var string
     */
    private $millesime;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code client.
     *
     * @return string Returns the code client.
     */
    public function getCodeClient() {
        return $this->codeClient;
    }

    /**
     * Get the code rubrique.
     *
     * @return string Returns the code rubrique.
     */
    public function getCodeRubrique() {
        return $this->codeRubrique;
    }

    /**
     * Get the info cellule.
     *
     * @return float Returns the info cellule.
     */
    public function getInfoCellule() {
        return $this->infoCellule;
    }

    /**
     * Get the millesime.
     *
     * @return string Returns the millesime.
     */
    public function getMillesime() {
        return $this->millesime;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return Statistiques Returns this Statistiques.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code rubrique.
     *
     * @param string $codeRubrique The code rubrique.
     * @return Statistiques Returns this Statistiques.
     */
    public function setCodeRubrique($codeRubrique) {
        $this->codeRubrique = $codeRubrique;
        return $this;
    }

    /**
     * Set the info cellule.
     *
     * @param float $infoCellule The info cellule.
     * @return Statistiques Returns this Statistiques.
     */
    public function setInfoCellule($infoCellule) {
        $this->infoCellule = $infoCellule;
        return $this;
    }

    /**
     * Set the millesime.
     *
     * @param string $millesime The millesime.
     * @return Statistiques Returns this Statistiques.
     */
    public function setMillesime($millesime) {
        $this->millesime = $millesime;
        return $this;
    }
}
