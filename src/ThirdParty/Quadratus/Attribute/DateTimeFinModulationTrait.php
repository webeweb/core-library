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
 * Fin modulation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeFinModulationTrait {

    /**
     * Fin modulation.
     *
     * @var DateTime|null
     */
    private $finModulation;

    /**
     * Get the fin modulation.
     *
     * @return DateTime|null Returns the fin modulation.
     */
    public function getFinModulation() {
        return $this->finModulation;
    }

    /**
     * Set the fin modulation.
     *
     * @param DateTime|null $finModulation The fin modulation.
     */
    public function setFinModulation(DateTime $finModulation = null) {
        $this->finModulation = $finModulation;
        return $this;
    }
}
