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
 * Mig trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMigTrait {

    /**
     * Mig.
     *
     * @var float
     */
    private $mig;

    /**
     * Get the mig.
     *
     * @return float Returns the mig.
     */
    public function getMig() {
        return $this->mig;
    }

    /**
     * Set the mig.
     *
     * @param float $mig The mig.
     */
    public function setMig($mig) {
        $this->mig = $mig;
        return $this;
    }
}
