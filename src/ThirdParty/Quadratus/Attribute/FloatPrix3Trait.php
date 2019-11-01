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
 * Prix3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrix3Trait {

    /**
     * Prix3.
     *
     * @var float
     */
    private $prix3;

    /**
     * Get the prix3.
     *
     * @return float Returns the prix3.
     */
    public function getPrix3() {
        return $this->prix3;
    }

    /**
     * Set the prix3.
     *
     * @param float $prix3 The prix3.
     */
    public function setPrix3($prix3) {
        $this->prix3 = $prix3;
        return $this;
    }
}
