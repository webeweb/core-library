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

use DateTime;

/**
 * Agenda note du jour.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class AgendaNoteDuJour {

    /**
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Commentaire.
     *
     * @var string
     */
    private $commentaire;

    /**
     * Date modif.
     *
     * @var DateTime|null
     */
    private $dateModif;

    /**
     * Jour.
     *
     * @var DateTime|null
     */
    private $jour;

    /**
     * Ma j externe.
     *
     * @var bool
     */
    private $maJExterne;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code collaborateur.
     *
     * @return string Returns the code collaborateur.
     */
    public function getCodeCollaborateur() {
        return $this->codeCollaborateur;
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
     * Get the date modif.
     *
     * @return DateTime|null Returns the date modif.
     */
    public function getDateModif() {
        return $this->dateModif;
    }

    /**
     * Get the jour.
     *
     * @return DateTime|null Returns the jour.
     */
    public function getJour() {
        return $this->jour;
    }

    /**
     * Get the ma j externe.
     *
     * @return bool Returns the ma j externe.
     */
    public function getMaJExterne() {
        return $this->maJExterne;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
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
     * Set the date modif.
     *
     * @param DateTime|null $dateModif The date modif.
     */
    public function setDateModif(DateTime $dateModif = null) {
        $this->dateModif = $dateModif;
        return $this;
    }

    /**
     * Set the jour.
     *
     * @param DateTime|null $jour The jour.
     */
    public function setJour(DateTime $jour = null) {
        $this->jour = $jour;
        return $this;
    }

    /**
     * Set the ma j externe.
     *
     * @param bool $maJExterne The ma j externe.
     */
    public function setMaJExterne($maJExterne) {
        $this->maJExterne = $maJExterne;
        return $this;
    }
}
