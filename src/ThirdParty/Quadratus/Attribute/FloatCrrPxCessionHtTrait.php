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
 * Crr px cession ht trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCrrPxCessionHtTrait {

    /**
     * Crr px cession ht.
     *
     * @var float
     */
    private $crrPxCessionHt;

    /**
     * Get the crr px cession ht.
     *
     * @return float Returns the crr px cession ht.
     */
    public function getCrrPxCessionHt() {
        return $this->crrPxCessionHt;
    }

    /**
     * Set the crr px cession ht.
     *
     * @param float $crrPxCessionHt The crr px cession ht.
     */
    public function setCrrPxCessionHt($crrPxCessionHt) {
        $this->crrPxCessionHt = $crrPxCessionHt;
        return $this;
    }
}
