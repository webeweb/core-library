<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

/**
 * Detail charges.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class DetailCharges {

    /**
     * Commentaire.
     *
     * @var string
     */
    private $commentaire;

    /**
     * Montant.
     *
     * @var float
     */
    private $montant;

    /**
     * Num ligne.
     *
     * @var int
     */
    private $numLigne;

    /**
     * Uniq id.
     *
     * @var string
     */
    private $uniqId;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the commentaire.
     *
     * @return string Returns the commentaire.
     */
    public function getCommentaire() {
        return $this->commentaire;
    }

    /**
     * Get the montant.
     *
     * @return float Returns the montant.
     */
    public function getMontant() {
        return $this->montant;
    }

    /**
     * Get the num ligne.
     *
     * @return int Returns the num ligne.
     */
    public function getNumLigne() {
        return $this->numLigne;
    }

    /**
     * Get the uniq id.
     *
     * @return string Returns the uniq id.
     */
    public function getUniqId() {
        return $this->uniqId;
    }

    /**
     * Set the commentaire.
     *
     * @param string $commentaire The commentaire.
     */
    public function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float $montant The montant.
     */
    public function setMontant($montant) {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string $uniqId The uniq id.
     */
    public function setUniqId($uniqId) {
        $this->uniqId = $uniqId;
        return $this;
    }
}
