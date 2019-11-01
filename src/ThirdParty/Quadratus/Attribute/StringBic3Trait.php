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
 * Bic3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringBic3Trait {

    /**
     * Bic3.
     *
     * @var string
     */
    private $bic3;

    /**
     * Get the bic3.
     *
     * @return string Returns the bic3.
     */
    public function getBic3() {
        return $this->bic3;
    }

    /**
     * Set the bic3.
     *
     * @param string $bic3 The bic3.
     */
    public function setBic3($bic3) {
        $this->bic3 = $bic3;
        return $this;
    }
}
