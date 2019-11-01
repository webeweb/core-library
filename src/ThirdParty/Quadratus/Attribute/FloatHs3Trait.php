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
 * Hs3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHs3Trait {

    /**
     * Hs3.
     *
     * @var float
     */
    private $hs3;

    /**
     * Get the hs3.
     *
     * @return float Returns the hs3.
     */
    public function getHs3() {
        return $this->hs3;
    }

    /**
     * Set the hs3.
     *
     * @param float $hs3 The hs3.
     */
    public function setHs3($hs3) {
        $this->hs3 = $hs3;
        return $this;
    }
}
