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
 * Epargne sal code2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEpargneSalCode2Trait {

    /**
     * Epargne sal code2.
     *
     * @var string
     */
    private $epargneSalCode2;

    /**
     * Get the epargne sal code2.
     *
     * @return string Returns the epargne sal code2.
     */
    public function getEpargneSalCode2() {
        return $this->epargneSalCode2;
    }

    /**
     * Set the epargne sal code2.
     *
     * @param string $epargneSalCode2 The epargne sal code2.
     */
    public function setEpargneSalCode2($epargneSalCode2) {
        $this->epargneSalCode2 = $epargneSalCode2;
        return $this;
    }
}
