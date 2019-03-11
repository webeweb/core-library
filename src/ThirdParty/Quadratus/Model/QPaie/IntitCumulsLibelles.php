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
 * Intit cumuls libelles model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class IntitCumulsLibelles {

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Num cumul bulletin.
     *
     * @var int
     */
    private $numCumulBulletin;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the intitule.
     *
     * @return string Returns the intitule.
     */
    public function getIntitule() {
        return $this->intitule;
    }

    /**
     * Get the num cumul bulletin.
     *
     * @return int Returns the num cumul bulletin.
     */
    public function getNumCumulBulletin() {
        return $this->numCumulBulletin;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return IntitCumulsLibelles Returns this intit cumuls libelles.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the num cumul bulletin.
     *
     * @param int $numCumulBulletin The num cumul bulletin.
     * @return IntitCumulsLibelles Returns this intit cumuls libelles.
     */
    public function setNumCumulBulletin($numCumulBulletin) {
        $this->numCumulBulletin = $numCumulBulletin;
        return $this;
    }
}
