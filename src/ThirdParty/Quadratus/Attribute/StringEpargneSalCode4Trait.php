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
 * Epargne sal code4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEpargneSalCode4Trait {

    /**
     * Epargne sal code4.
     *
     * @var string
     */
    private $epargneSalCode4;

    /**
     * Get the epargne sal code4.
     *
     * @return string Returns the epargne sal code4.
     */
    public function getEpargneSalCode4() {
        return $this->epargneSalCode4;
    }

    /**
     * Set the epargne sal code4.
     *
     * @param string $epargneSalCode4 The epargne sal code4.
     */
    public function setEpargneSalCode4($epargneSalCode4) {
        $this->epargneSalCode4 = $epargneSalCode4;
        return $this;
    }
}
