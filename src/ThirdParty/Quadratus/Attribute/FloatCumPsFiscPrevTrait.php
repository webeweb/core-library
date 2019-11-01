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
 * Cum ps fisc prev trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumPsFiscPrevTrait {

    /**
     * Cum ps fisc prev.
     *
     * @var float
     */
    private $cumPsFiscPrev;

    /**
     * Get the cum ps fisc prev.
     *
     * @return float Returns the cum ps fisc prev.
     */
    public function getCumPsFiscPrev() {
        return $this->cumPsFiscPrev;
    }

    /**
     * Set the cum ps fisc prev.
     *
     * @param float $cumPsFiscPrev The cum ps fisc prev.
     */
    public function setCumPsFiscPrev($cumPsFiscPrev) {
        $this->cumPsFiscPrev = $cumPsFiscPrev;
        return $this;
    }
}
