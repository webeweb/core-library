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
 * Iban code imput frais trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIbanCodeImputFraisTrait {

    /**
     * Iban code imput frais.
     *
     * @var string
     */
    private $ibanCodeImputFrais;

    /**
     * Get the iban code imput frais.
     *
     * @return string Returns the iban code imput frais.
     */
    public function getIbanCodeImputFrais() {
        return $this->ibanCodeImputFrais;
    }

    /**
     * Set the iban code imput frais.
     *
     * @param string $ibanCodeImputFrais The iban code imput frais.
     */
    public function setIbanCodeImputFrais($ibanCodeImputFrais) {
        $this->ibanCodeImputFrais = $ibanCodeImputFrais;
        return $this;
    }
}
