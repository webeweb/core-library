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
 * Prix6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrix6Trait {

    /**
     * Prix6.
     *
     * @var float
     */
    private $prix6;

    /**
     * Get the prix6.
     *
     * @return float Returns the prix6.
     */
    public function getPrix6() {
        return $this->prix6;
    }

    /**
     * Set the prix6.
     *
     * @param float $prix6 The prix6.
     */
    public function setPrix6($prix6) {
        $this->prix6 = $prix6;
        return $this;
    }
}
