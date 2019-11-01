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
 * Indemn rupt conv trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatIndemnRuptConvTrait {

    /**
     * Indemn rupt conv.
     *
     * @var float
     */
    private $indemnRuptConv;

    /**
     * Get the indemn rupt conv.
     *
     * @return float Returns the indemn rupt conv.
     */
    public function getIndemnRuptConv() {
        return $this->indemnRuptConv;
    }

    /**
     * Set the indemn rupt conv.
     *
     * @param float $indemnRuptConv The indemn rupt conv.
     */
    public function setIndemnRuptConv($indemnRuptConv) {
        $this->indemnRuptConv = $indemnRuptConv;
        return $this;
    }
}
