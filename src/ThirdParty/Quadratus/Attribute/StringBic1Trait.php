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
 * Bic1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringBic1Trait {

    /**
     * Bic1.
     *
     * @var string
     */
    private $bic1;

    /**
     * Get the bic1.
     *
     * @return string Returns the bic1.
     */
    public function getBic1() {
        return $this->bic1;
    }

    /**
     * Set the bic1.
     *
     * @param string $bic1 The bic1.
     */
    public function setBic1($bic1) {
        $this->bic1 = $bic1;
        return $this;
    }
}
