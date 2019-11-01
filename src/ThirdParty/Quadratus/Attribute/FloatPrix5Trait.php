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
 * Prix5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrix5Trait {

    /**
     * Prix5.
     *
     * @var float
     */
    private $prix5;

    /**
     * Get the prix5.
     *
     * @return float Returns the prix5.
     */
    public function getPrix5() {
        return $this->prix5;
    }

    /**
     * Set the prix5.
     *
     * @param float $prix5 The prix5.
     */
    public function setPrix5($prix5) {
        $this->prix5 = $prix5;
        return $this;
    }
}
