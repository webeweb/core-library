<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

/**
 * Quadra db.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class QuadraDb {

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
     * Get the version.
     *
     * @return int Returns the version.
     */
    public function getVersion() {
        return $this->version;
    }

    /**
     * Set the version.
     *
     * @param int $version The version.
     * @return QuadraDb Returns this Quadra db.
     */
    public function setVersion($version) {
        $this->version = $version;
        return $this;
    }
}
