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
 * Observation1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringObservation1Trait {

    /**
     * Observation1.
     *
     * @var string
     */
    private $observation1;

    /**
     * Get the observation1.
     *
     * @return string Returns the observation1.
     */
    public function getObservation1() {
        return $this->observation1;
    }

    /**
     * Set the observation1.
     *
     * @param string $observation1 The observation1.
     */
    public function setObservation1($observation1) {
        $this->observation1 = $observation1;
        return $this;
    }
}
