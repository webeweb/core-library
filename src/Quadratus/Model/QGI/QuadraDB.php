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
 * Quadra d b model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class QuadraDB {

    /**
     * Date envoi message.
     *
     * @var DateTime
     */
    private $dateEnvoiMessage;

    /**
     * Taille base.
     *
     * @var float
     */
    private $tailleBase;

    /**
     * Version.
     *
     * @var int
     */
    private $version;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the date envoi message.
     *
     * @return DateTime Returns the date envoi message.
     */
    public function getDateEnvoiMessage() {
        return $this->dateEnvoiMessage;
    }

    /**
     * Get the taille base.
     *
     * @return float Returns the taille base.
     */
    public function getTailleBase() {
        return $this->tailleBase;
    }

    /**
     * Get the version.
     *
     * @return int Returns the version.
     */
    public function getVersion() {
        return $this->version;
    }

    /**
     * Set the date envoi message.
     *
     * @param DateTime $dateEnvoiMessage The date envoi message.
     * @return QuadraDB Returns this quadra d b.
     */
    public function setDateEnvoiMessage(DateTime $dateEnvoiMessage = null) {
        $this->dateEnvoiMessage = $dateEnvoiMessage;
        return $this;
    }

    /**
     * Set the taille base.
     *
     * @param float $tailleBase The taille base.
     * @return QuadraDB Returns this quadra d b.
     */
    public function setTailleBase($tailleBase) {
        $this->tailleBase = $tailleBase;
        return $this;
    }

    /**
     * Set the version.
     *
     * @param int $version The version.
     * @return QuadraDB Returns this quadra d b.
     */
    public function setVersion($version) {
        $this->version = $version;
        return $this;
    }

}
