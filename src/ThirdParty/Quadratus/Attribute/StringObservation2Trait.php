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
 * Observation2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringObservation2Trait {

    /**
     * Observation2.
     *
     * @var string
     */
    private $observation2;

    /**
     * Get the observation2.
     *
     * @return string Returns the observation2.
     */
    public function getObservation2() {
        return $this->observation2;
    }

    /**
     * Set the observation2.
     *
     * @param string $observation2 The observation2.
     */
    public function setObservation2($observation2) {
        $this->observation2 = $observation2;
        return $this;
    }
}
