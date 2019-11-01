<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

use DateTime;

/**
 * 35 heures trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTime35HeuresTrait {

    /**
     * 35 heures.
     *
     * @var DateTime|null
     */
    private $_35Heures;

    /**
     * Get the 35 heures.
     *
     * @return DateTime|null Returns the 35 heures.
     */
    public function get35Heures() {
        return $this->_35Heures;
    }

    /**
     * Set the 35 heures.
     *
     * @param DateTime|null $_35Heures The 35 heures.
     */
    public function set35Heures(DateTime $_35Heures = null) {
        $this->_35Heures = $_35Heures;
        return $this;
    }
}
