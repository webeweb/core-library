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
 * Iban id client2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIbanIdClient2Trait {

    /**
     * Iban id client2.
     *
     * @var string
     */
    private $ibanIdClient2;

    /**
     * Get the iban id client2.
     *
     * @return string Returns the iban id client2.
     */
    public function getIbanIdClient2() {
        return $this->ibanIdClient2;
    }

    /**
     * Set the iban id client2.
     *
     * @param string $ibanIdClient2 The iban id client2.
     */
    public function setIbanIdClient2($ibanIdClient2) {
        $this->ibanIdClient2 = $ibanIdClient2;
        return $this;
    }
}
