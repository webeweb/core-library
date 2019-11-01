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
 * Iban id client1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIbanIdClient1Trait {

    /**
     * Iban id client1.
     *
     * @var string
     */
    private $ibanIdClient1;

    /**
     * Get the iban id client1.
     *
     * @return string Returns the iban id client1.
     */
    public function getIbanIdClient1() {
        return $this->ibanIdClient1;
    }

    /**
     * Set the iban id client1.
     *
     * @param string $ibanIdClient1 The iban id client1.
     */
    public function setIbanIdClient1($ibanIdClient1) {
        $this->ibanIdClient1 = $ibanIdClient1;
        return $this;
    }
}
