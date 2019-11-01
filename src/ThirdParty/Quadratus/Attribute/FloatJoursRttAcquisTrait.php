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

/**
 * Jours rtt acquis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatJoursRttAcquisTrait {

    /**
     * Jours rtt acquis.
     *
     * @var float
     */
    private $joursRttAcquis;

    /**
     * Get the jours rtt acquis.
     *
     * @return float Returns the jours rtt acquis.
     */
    public function getJoursRttAcquis() {
        return $this->joursRttAcquis;
    }

    /**
     * Set the jours rtt acquis.
     *
     * @param float $joursRttAcquis The jours rtt acquis.
     */
    public function setJoursRttAcquis($joursRttAcquis) {
        $this->joursRttAcquis = $joursRttAcquis;
        return $this;
    }
}
