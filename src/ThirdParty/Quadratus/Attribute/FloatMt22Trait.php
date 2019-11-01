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
 * Mt22 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMt22Trait {

    /**
     * Mt22.
     *
     * @var float
     */
    private $mt22;

    /**
     * Get the mt22.
     *
     * @return float Returns the mt22.
     */
    public function getMt22() {
        return $this->mt22;
    }

    /**
     * Set the mt22.
     *
     * @param float $mt22 The mt22.
     */
    public function setMt22($mt22) {
        $this->mt22 = $mt22;
        return $this;
    }
}
