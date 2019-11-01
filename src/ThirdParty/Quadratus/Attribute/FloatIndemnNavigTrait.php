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
 * Indemn navig trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatIndemnNavigTrait {

    /**
     * Indemn navig.
     *
     * @var float
     */
    private $indemnNavig;

    /**
     * Get the indemn navig.
     *
     * @return float Returns the indemn navig.
     */
    public function getIndemnNavig() {
        return $this->indemnNavig;
    }

    /**
     * Set the indemn navig.
     *
     * @param float $indemnNavig The indemn navig.
     */
    public function setIndemnNavig($indemnNavig) {
        $this->indemnNavig = $indemnNavig;
        return $this;
    }
}
