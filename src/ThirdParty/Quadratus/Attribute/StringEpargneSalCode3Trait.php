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
 * Epargne sal code3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEpargneSalCode3Trait {

    /**
     * Epargne sal code3.
     *
     * @var string
     */
    private $epargneSalCode3;

    /**
     * Get the epargne sal code3.
     *
     * @return string Returns the epargne sal code3.
     */
    public function getEpargneSalCode3() {
        return $this->epargneSalCode3;
    }

    /**
     * Set the epargne sal code3.
     *
     * @param string $epargneSalCode3 The epargne sal code3.
     */
    public function setEpargneSalCode3($epargneSalCode3) {
        $this->epargneSalCode3 = $epargneSalCode3;
        return $this;
    }
}
