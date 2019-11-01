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
 * Iban3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIban3Trait {

    /**
     * Iban3.
     *
     * @var string
     */
    private $iban3;

    /**
     * Get the iban3.
     *
     * @return string Returns the iban3.
     */
    public function getIban3() {
        return $this->iban3;
    }

    /**
     * Set the iban3.
     *
     * @param string $iban3 The iban3.
     */
    public function setIban3($iban3) {
        $this->iban3 = $iban3;
        return $this;
    }
}
