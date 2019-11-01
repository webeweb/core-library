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
 * Prix2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrix2Trait {

    /**
     * Prix2.
     *
     * @var float
     */
    private $prix2;

    /**
     * Get the prix2.
     *
     * @return float Returns the prix2.
     */
    public function getPrix2() {
        return $this->prix2;
    }

    /**
     * Set the prix2.
     *
     * @param float $prix2 The prix2.
     */
    public function setPrix2($prix2) {
        $this->prix2 = $prix2;
        return $this;
    }
}
