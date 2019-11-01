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
 * Prix4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrix4Trait {

    /**
     * Prix4.
     *
     * @var float
     */
    private $prix4;

    /**
     * Get the prix4.
     *
     * @return float Returns the prix4.
     */
    public function getPrix4() {
        return $this->prix4;
    }

    /**
     * Set the prix4.
     *
     * @param float $prix4 The prix4.
     */
    public function setPrix4($prix4) {
        $this->prix4 = $prix4;
        return $this;
    }
}
