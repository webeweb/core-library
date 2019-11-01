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
 * Heures nuit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeHeuresNuitTrait {

    /**
     * Heures nuit.
     *
     * @var DateTime|null
     */
    private $heuresNuit;

    /**
     * Get the heures nuit.
     *
     * @return DateTime|null Returns the heures nuit.
     */
    public function getHeuresNuit() {
        return $this->heuresNuit;
    }

    /**
     * Set the heures nuit.
     *
     * @param DateTime|null $heuresNuit The heures nuit.
     */
    public function setHeuresNuit(DateTime $heuresNuit = null) {
        $this->heuresNuit = $heuresNuit;
        return $this;
    }
}
