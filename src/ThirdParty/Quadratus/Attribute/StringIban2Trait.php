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
 * Iban2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIban2Trait {

    /**
     * Iban2.
     *
     * @var string
     */
    private $iban2;

    /**
     * Get the iban2.
     *
     * @return string Returns the iban2.
     */
    public function getIban2() {
        return $this->iban2;
    }

    /**
     * Set the iban2.
     *
     * @param string $iban2 The iban2.
     */
    public function setIban2($iban2) {
        $this->iban2 = $iban2;
        return $this;
    }
}
