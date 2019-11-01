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
 * Smic1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSmic1Trait {

    /**
     * Smic1.
     *
     * @var float
     */
    private $smic1;

    /**
     * Get the smic1.
     *
     * @return float Returns the smic1.
     */
    public function getSmic1() {
        return $this->smic1;
    }

    /**
     * Set the smic1.
     *
     * @param float $smic1 The smic1.
     */
    public function setSmic1($smic1) {
        $this->smic1 = $smic1;
        return $this;
    }
}
