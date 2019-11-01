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
 * Mt fisc prev trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtFiscPrevTrait {

    /**
     * Mt fisc prev.
     *
     * @var float
     */
    private $mtFiscPrev;

    /**
     * Get the mt fisc prev.
     *
     * @return float Returns the mt fisc prev.
     */
    public function getMtFiscPrev() {
        return $this->mtFiscPrev;
    }

    /**
     * Set the mt fisc prev.
     *
     * @param float $mtFiscPrev The mt fisc prev.
     */
    public function setMtFiscPrev($mtFiscPrev) {
        $this->mtFiscPrev = $mtFiscPrev;
        return $this;
    }
}
