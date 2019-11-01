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
 * Iban id client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIbanIdClientTrait {

    /**
     * Iban id client.
     *
     * @var string
     */
    private $ibanIdClient;

    /**
     * Get the iban id client.
     *
     * @return string Returns the iban id client.
     */
    public function getIbanIdClient() {
        return $this->ibanIdClient;
    }

    /**
     * Set the iban id client.
     *
     * @param string $ibanIdClient The iban id client.
     */
    public function setIbanIdClient($ibanIdClient) {
        $this->ibanIdClient = $ibanIdClient;
        return $this;
    }
}
