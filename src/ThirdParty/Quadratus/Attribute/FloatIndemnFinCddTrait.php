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
 * Indemn fin cdd trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatIndemnFinCddTrait {

    /**
     * Indemn fin cdd.
     *
     * @var float
     */
    private $indemnFinCdd;

    /**
     * Get the indemn fin cdd.
     *
     * @return float Returns the indemn fin cdd.
     */
    public function getIndemnFinCdd() {
        return $this->indemnFinCdd;
    }

    /**
     * Set the indemn fin cdd.
     *
     * @param float $indemnFinCdd The indemn fin cdd.
     */
    public function setIndemnFinCdd($indemnFinCdd) {
        $this->indemnFinCdd = $indemnFinCdd;
        return $this;
    }
}
