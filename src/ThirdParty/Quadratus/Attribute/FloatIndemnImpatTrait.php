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
 * Indemn impat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatIndemnImpatTrait {

    /**
     * Indemn impat.
     *
     * @var float
     */
    private $indemnImpat;

    /**
     * Get the indemn impat.
     *
     * @return float Returns the indemn impat.
     */
    public function getIndemnImpat() {
        return $this->indemnImpat;
    }

    /**
     * Set the indemn impat.
     *
     * @param float $indemnImpat The indemn impat.
     */
    public function setIndemnImpat($indemnImpat) {
        $this->indemnImpat = $indemnImpat;
        return $this;
    }
}
