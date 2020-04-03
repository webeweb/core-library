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
 * i sessions.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class iSessions {

    /**
     * Adresse ip.
     *
     * @var string
     */
    private $adresseIp;

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
     * @var DateTime|null
     */
    private $dateActive;

    /**
     * Date added.
     *
     * @var DateTime|null
     */
    private $dateAdded;

    /**
     * Dossier.
     *
     * @var string
     */
    private $dossier;

    /**
     * Id.
     *
     * @var int
     */
    private $id;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the adresse ip.
     *
     * @return string Returns the adresse ip.
     */
    public function getAdresseIp() {
        return $this->adresseIp;
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
     * @return DateTime|null Returns the date active.
     */
    public function getDateActive() {
        return $this->dateActive;
    }

    /**
     * Get the date added.
     *
     * @return DateTime|null Returns the date added.
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
     * Get the id.
     *
     * @return int Returns the id.
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set the adresse ip.
     *
     * @param string $adresseIp The adresse ip.
     * @return iSessions Returns this i sessions.
     */
    public function setAdresseIp($adresseIp) {
        $this->adresseIp = $adresseIp;
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
     * @param DateTime|null $dateActive The date active.
     * @return iSessions Returns this i sessions.
     */
    public function setDateActive(DateTime $dateActive = null) {
        $this->dateActive = $dateActive;
        return $this;
    }

    /**
     * Set the date added.
     *
     * @param DateTime|null $dateAdded The date added.
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
     * Set the id.
     *
     * @param int $id The id.
     * @return iSessions Returns this i sessions.
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }
}
