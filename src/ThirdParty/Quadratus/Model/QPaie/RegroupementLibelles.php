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
 * Regroupement libelles model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class RegroupementLibelles {

    /**
     * Code libelle.
     *
     * @var string
     */
    private $codeLibelle;

    /**
     * Num regroupement.
     *
     * @var int
     */
    private $numRegroupement;

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
     * Get the num regroupement.
     *
     * @return int Returns the num regroupement.
     */
    public function getNumRegroupement() {
        return $this->numRegroupement;
    }

    /**
     * Set the code libelle.
     *
     * @param string $codeLibelle The code libelle.
     * @return RegroupementLibelles Returns this regroupement libelles.
     */
    public function setCodeLibelle($codeLibelle) {
        $this->codeLibelle = $codeLibelle;
        return $this;
    }

    /**
     * Set the num regroupement.
     *
     * @param int $numRegroupement The num regroupement.
     * @return RegroupementLibelles Returns this regroupement libelles.
     */
    public function setNumRegroupement($numRegroupement) {
        $this->numRegroupement = $numRegroupement;
        return $this;
    }
}
