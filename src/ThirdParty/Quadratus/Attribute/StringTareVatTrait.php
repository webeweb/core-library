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
 * Tare vat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTareVatTrait {

    /**
     * Tare vat.
     *
     * @var string
     */
    private $tareVat;

    /**
     * Get the tare vat.
     *
     * @return string Returns the tare vat.
     */
    public function getTareVat() {
        return $this->tareVat;
    }

    /**
     * Set the tare vat.
     *
     * @param string $tareVat The tare vat.
     */
    public function setTareVat($tareVat) {
        $this->tareVat = $tareVat;
        return $this;
    }
}
