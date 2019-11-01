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
 * Prix7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrix7Trait {

    /**
     * Prix7.
     *
     * @var float
     */
    private $prix7;

    /**
     * Get the prix7.
     *
     * @return float Returns the prix7.
     */
    public function getPrix7() {
        return $this->prix7;
    }

    /**
     * Set the prix7.
     *
     * @param float $prix7 The prix7.
     */
    public function setPrix7($prix7) {
        $this->prix7 = $prix7;
        return $this;
    }
}
