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
 * Temps passes deleted model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class TempsPassesDeleted {

    /**
     * Contexte.
     *
     * @var string
     */
    private $contexte;

    /**
     * Date suppression.
     *
     * @var DateTime
     */
    private $dateSuppression;

    /**
     * G uniq i d.
     *
     * @var string
     */
    private $gUniqID;

    /**
     * User.
     *
     * @var string
     */
    private $user;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the contexte.
     *
     * @return string Returns the contexte.
     */
    public function getContexte() {
        return $this->contexte;
    }

    /**
     * Get the date suppression.
     *
     * @return DateTime Returns the date suppression.
     */
    public function getDateSuppression() {
        return $this->dateSuppression;
    }

    /**
     * Get the g uniq i d.
     *
     * @return string Returns the g uniq i d.
     */
    public function getGUniqID() {
        return $this->gUniqID;
    }

    /**
     * Get the user.
     *
     * @return string Returns the user.
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * Set the contexte.
     *
     * @param string $contexte The contexte.
     * @return TempsPassesDeleted Returns this temps passes deleted.
     */
    public function setContexte($contexte) {
        $this->contexte = $contexte;
        return $this;
    }

    /**
     * Set the date suppression.
     *
     * @param DateTime $dateSuppression The date suppression.
     * @return TempsPassesDeleted Returns this temps passes deleted.
     */
    public function setDateSuppression(DateTime $dateSuppression = null) {
        $this->dateSuppression = $dateSuppression;
        return $this;
    }

    /**
     * Set the g uniq i d.
     *
     * @param string $gUniqID The g uniq i d.
     * @return TempsPassesDeleted Returns this temps passes deleted.
     */
    public function setGUniqID($gUniqID) {
        $this->gUniqID = $gUniqID;
        return $this;
    }

    /**
     * Set the user.
     *
     * @param string $user The user.
     * @return TempsPassesDeleted Returns this temps passes deleted.
     */
    public function setUser($user) {
        $this->user = $user;
        return $this;
    }

}
