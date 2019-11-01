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
 * Epargne sal code1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEpargneSalCode1Trait {

    /**
     * Epargne sal code1.
     *
     * @var string
     */
    private $epargneSalCode1;

    /**
     * Get the epargne sal code1.
     *
     * @return string Returns the epargne sal code1.
     */
    public function getEpargneSalCode1() {
        return $this->epargneSalCode1;
    }

    /**
     * Set the epargne sal code1.
     *
     * @param string $epargneSalCode1 The epargne sal code1.
     */
    public function setEpargneSalCode1($epargneSalCode1) {
        $this->epargneSalCode1 = $epargneSalCode1;
        return $this;
    }
}
