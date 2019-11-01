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
 * Rapp dads1 obs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRappDads1ObsTrait {

    /**
     * Rapp dads1 obs.
     *
     * @var string
     */
    private $rappDads1Obs;

    /**
     * Get the rapp dads1 obs.
     *
     * @return string Returns the rapp dads1 obs.
     */
    public function getRappDads1Obs() {
        return $this->rappDads1Obs;
    }

    /**
     * Set the rapp dads1 obs.
     *
     * @param string $rappDads1Obs The rapp dads1 obs.
     */
    public function setRappDads1Obs($rappDads1Obs) {
        $this->rappDads1Obs = $rappDads1Obs;
        return $this;
    }
}
