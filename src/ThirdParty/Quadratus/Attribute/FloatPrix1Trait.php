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
 * Prix1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrix1Trait {

    /**
     * Prix1.
     *
     * @var float
     */
    private $prix1;

    /**
     * Get the prix1.
     *
     * @return float Returns the prix1.
     */
    public function getPrix1() {
        return $this->prix1;
    }

    /**
     * Set the prix1.
     *
     * @param float $prix1 The prix1.
     */
    public function setPrix1($prix1) {
        $this->prix1 = $prix1;
        return $this;
    }
}
