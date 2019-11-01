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
 * Code tva client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTvaClientTrait {

    /**
     * Code tva client.
     *
     * @var string
     */
    private $codeTvaClient;

    /**
     * Get the code tva client.
     *
     * @return string Returns the code tva client.
     */
    public function getCodeTvaClient() {
        return $this->codeTvaClient;
    }

    /**
     * Set the code tva client.
     *
     * @param string $codeTvaClient The code tva client.
     */
    public function setCodeTvaClient($codeTvaClient) {
        $this->codeTvaClient = $codeTvaClient;
        return $this;
    }
}
