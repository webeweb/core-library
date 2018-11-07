<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QGI;

use DateTime;

/**
 * i sessions model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class iSessions {

    /**
     * Adresse i p.
     *
     * @var string
     */
    private $adresseIP;

    /**
     * Appli.
     *
     * @var string
     */
    private $appli;

    /**
     * Code user.
     *
     * @var string
     */
    private $codeUser;

    /**
     * Date active.
     *
     * @var DateTime
     */
    private $dateActive;

    /**
     * Date added.
     *
     * @var DateTime
     */
    private $dateAdded;

    /**
     * Dossier.
     *
     * @var string
     */
    private $dossier;

    /**
     * I d.
     *
     * @var int
     */
    private $iD;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the adresse i p.
     *
     * @return string Returns the adresse i p.
     */
    public function getAdresseIP() {
        return $this->adresseIP;
    }

    /**
     * Get the appli.
     *
     * @return string Returns the appli.
     */
    public function getAppli() {
        return $this->appli;
    }

    /**
     * Get the code user.
     *
     * @return string Returns the code user.
     */
    public function getCodeUser() {
        return $this->codeUser;
    }

    /**
     * Get the date active.
     *
     * @return DateTime Returns the date active.
     */
    public function getDateActive() {
        return $this->dateActive;
    }

    /**
     * Get the date added.
     *
     * @return DateTime Returns the date added.
     */
    public function getDateAdded() {
        return $this->dateAdded;
    }

    /**
     * Get the dossier.
     *
     * @return string Returns the dossier.
     */
    public function getDossier() {
        return $this->dossier;
    }

    /**
     * Get the i d.
     *
     * @return int Returns the i d.
     */
    public function getID() {
        return $this->iD;
    }

    /**
     * Set the adresse i p.
     *
     * @param string $adresseIP The adresse i p.
     * @return iSessions Returns this i sessions.
     */
    public function setAdresseIP($adresseIP) {
        $this->adresseIP = $adresseIP;
        return $this;
    }

    /**
     * Set the appli.
     *
     * @param string $appli The appli.
     * @return iSessions Returns this i sessions.
     */
    public function setAppli($appli) {
        $this->appli = $appli;
        return $this;
    }

    /**
     * Set the code user.
     *
     * @param string $codeUser The code user.
     * @return iSessions Returns this i sessions.
     */
    public function setCodeUser($codeUser) {
        $this->codeUser = $codeUser;
        return $this;
    }

    /**
     * Set the date active.
     *
     * @param DateTime $dateActive The date active.
     * @return iSessions Returns this i sessions.
     */
    public function setDateActive(DateTime $dateActive = null) {
        $this->dateActive = $dateActive;
        return $this;
    }

    /**
     * Set the date added.
     *
     * @param DateTime $dateAdded The date added.
     * @return iSessions Returns this i sessions.
     */
    public function setDateAdded(DateTime $dateAdded = null) {
        $this->dateAdded = $dateAdded;
        return $this;
    }

    /**
     * Set the dossier.
     *
     * @param string $dossier The dossier.
     * @return iSessions Returns this i sessions.
     */
    public function setDossier($dossier) {
        $this->dossier = $dossier;
        return $this;
    }

    /**
     * Set the i d.
     *
     * @param int $iD The i d.
     * @return iSessions Returns this i sessions.
     */
    public function setID($iD) {
        $this->iD = $iD;
        return $this;
    }

}
