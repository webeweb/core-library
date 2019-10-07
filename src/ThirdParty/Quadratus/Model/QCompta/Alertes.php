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

use DateTime;

/**
 * Alertes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Alertes {

    /**
     * Cloturee.
     *
     * @var bool
     */
    private $cloturee;

    /**
     * Commentaire.
     *
     * @var string
     */
    private $commentaire;

    /**
     * Date debut.
     *
     * @var DateTime
     */
    private $dateDebut;

    /**
     * Uniq i d.
     *
     * @var string
     */
    private $uniqID;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the cloturee.
     *
     * @return bool Returns the cloturee.
     */
    public function getCloturee() {
        return $this->cloturee;
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
     * Get the date debut.
     *
     * @return DateTime Returns the date debut.
     */
    public function getDateDebut() {
        return $this->dateDebut;
    }

    /**
     * Get the uniq i d.
     *
     * @return string Returns the uniq i d.
     */
    public function getUniqID() {
        return $this->uniqID;
    }

    /**
     * Set the cloturee.
     *
     * @param bool $cloturee The cloturee.
     * @return Alertes Returns this alertes.
     */
    public function setCloturee($cloturee) {
        $this->cloturee = $cloturee;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string $commentaire The commentaire.
     * @return Alertes Returns this alertes.
     */
    public function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the date debut.
     *
     * @param DateTime $dateDebut The date debut.
     * @return Alertes Returns this alertes.
     */
    public function setDateDebut(DateTime $dateDebut = null) {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    /**
     * Set the uniq i d.
     *
     * @param string $uniqID The uniq i d.
     * @return Alertes Returns this alertes.
     */
    public function setUniqID($uniqID) {
        $this->uniqID = $uniqID;
        return $this;
    }
}
