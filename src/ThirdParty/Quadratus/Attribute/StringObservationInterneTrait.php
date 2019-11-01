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
 * Observation interne trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringObservationInterneTrait {

    /**
     * Observation interne.
     *
     * @var string
     */
    private $observationInterne;

    /**
     * Get the observation interne.
     *
     * @return string Returns the observation interne.
     */
    public function getObservationInterne() {
        return $this->observationInterne;
    }

    /**
     * Set the observation interne.
     *
     * @param string $observationInterne The observation interne.
     */
    public function setObservationInterne($observationInterne) {
        $this->observationInterne = $observationInterne;
        return $this;
    }
}
