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
 * Observation3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringObservation3Trait {

    /**
     * Observation3.
     *
     * @var string
     */
    private $observation3;

    /**
     * Get the observation3.
     *
     * @return string Returns the observation3.
     */
    public function getObservation3() {
        return $this->observation3;
    }

    /**
     * Set the observation3.
     *
     * @param string $observation3 The observation3.
     */
    public function setObservation3($observation3) {
        $this->observation3 = $observation3;
        return $this;
    }
}
