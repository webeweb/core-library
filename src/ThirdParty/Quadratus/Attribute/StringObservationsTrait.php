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
 * Observations trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringObservationsTrait {

    /**
     * Observations.
     *
     * @var string
     */
    private $observations;

    /**
     * Get the observations.
     *
     * @return string Returns the observations.
     */
    public function getObservations() {
        return $this->observations;
    }

    /**
     * Set the observations.
     *
     * @param string $observations The observations.
     */
    public function setObservations($observations) {
        $this->observations = $observations;
        return $this;
    }
}
