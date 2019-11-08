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
 * Fraction etab pseudo siret.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class FractionEtabPseudoSiret {

    /**
     * A partir de.
     *
     * @var DateTime|null
     */
    private $aPartirDe;

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Num fraction.
     *
     * @var string
     */
    private $numFraction;

    /**
     * Pseudo siret.
     *
     * @var string
     */
    private $pseudoSiret;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the a partir de.
     *
     * @return DateTime|null Returns the a partir de.
     */
    public function getAPartirDe() {
        return $this->aPartirDe;
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
     * Get the num fraction.
     *
     * @return string Returns the num fraction.
     */
    public function getNumFraction() {
        return $this->numFraction;
    }

    /**
     * Get the pseudo siret.
     *
     * @return string Returns the pseudo siret.
     */
    public function getPseudoSiret() {
        return $this->pseudoSiret;
    }

    /**
     * Set the a partir de.
     *
     * @param DateTime|null $aPartirDe The a partir de.
     */
    public function setAPartirDe(DateTime $aPartirDe = null) {
        $this->aPartirDe = $aPartirDe;
        return $this;
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
     * Set the num fraction.
     *
     * @param string $numFraction The num fraction.
     */
    public function setNumFraction($numFraction) {
        $this->numFraction = $numFraction;
        return $this;
    }

    /**
     * Set the pseudo siret.
     *
     * @param string $pseudoSiret The pseudo siret.
     */
    public function setPseudoSiret($pseudoSiret) {
        $this->pseudoSiret = $pseudoSiret;
        return $this;
    }
}
