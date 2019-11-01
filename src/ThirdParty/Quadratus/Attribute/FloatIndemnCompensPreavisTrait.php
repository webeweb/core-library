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
 * Indemn compens preavis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatIndemnCompensPreavisTrait {

    /**
     * Indemn compens preavis.
     *
     * @var float
     */
    private $indemnCompensPreavis;

    /**
     * Get the indemn compens preavis.
     *
     * @return float Returns the indemn compens preavis.
     */
    public function getIndemnCompensPreavis() {
        return $this->indemnCompensPreavis;
    }

    /**
     * Set the indemn compens preavis.
     *
     * @param float $indemnCompensPreavis The indemn compens preavis.
     */
    public function setIndemnCompensPreavis($indemnCompensPreavis) {
        $this->indemnCompensPreavis = $indemnCompensPreavis;
        return $this;
    }
}
