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
 * Observation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringObservationTrait {

    /**
     * Observation.
     *
     * @var string
     */
    private $observation;

    /**
     * Get the observation.
     *
     * @return string Returns the observation.
     */
    public function getObservation() {
        return $this->observation;
    }

    /**
     * Set the observation.
     *
     * @param string $observation The observation.
     */
    public function setObservation($observation) {
        $this->observation = $observation;
        return $this;
    }
}
