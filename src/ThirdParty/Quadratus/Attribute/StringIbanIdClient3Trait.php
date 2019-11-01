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
 * Iban id client3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIbanIdClient3Trait {

    /**
     * Iban id client3.
     *
     * @var string
     */
    private $ibanIdClient3;

    /**
     * Get the iban id client3.
     *
     * @return string Returns the iban id client3.
     */
    public function getIbanIdClient3() {
        return $this->ibanIdClient3;
    }

    /**
     * Set the iban id client3.
     *
     * @param string $ibanIdClient3 The iban id client3.
     */
    public function setIbanIdClient3($ibanIdClient3) {
        $this->ibanIdClient3 = $ibanIdClient3;
        return $this;
    }
}
