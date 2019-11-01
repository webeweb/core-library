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
 * Bic2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringBic2Trait {

    /**
     * Bic2.
     *
     * @var string
     */
    private $bic2;

    /**
     * Get the bic2.
     *
     * @return string Returns the bic2.
     */
    public function getBic2() {
        return $this->bic2;
    }

    /**
     * Set the bic2.
     *
     * @param string $bic2 The bic2.
     */
    public function setBic2($bic2) {
        $this->bic2 = $bic2;
        return $this;
    }
}
