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
 * Iban1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIban1Trait {

    /**
     * Iban1.
     *
     * @var string
     */
    private $iban1;

    /**
     * Get the iban1.
     *
     * @return string Returns the iban1.
     */
    public function getIban1() {
        return $this->iban1;
    }

    /**
     * Set the iban1.
     *
     * @param string $iban1 The iban1.
     */
    public function setIban1($iban1) {
        $this->iban1 = $iban1;
        return $this;
    }
}
