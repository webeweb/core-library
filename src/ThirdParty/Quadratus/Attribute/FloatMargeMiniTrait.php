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
 * Marge mini trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMargeMiniTrait {

    /**
     * Marge mini.
     *
     * @var float
     */
    private $margeMini;

    /**
     * Get the marge mini.
     *
     * @return float Returns the marge mini.
     */
    public function getMargeMini() {
        return $this->margeMini;
    }

    /**
     * Set the marge mini.
     *
     * @param float $margeMini The marge mini.
     */
    public function setMargeMini($margeMini) {
        $this->margeMini = $margeMini;
        return $this;
    }
}
