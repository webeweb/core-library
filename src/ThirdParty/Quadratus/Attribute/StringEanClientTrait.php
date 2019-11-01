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
 * Ean client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEanClientTrait {

    /**
     * Ean client.
     *
     * @var string
     */
    private $eanClient;

    /**
     * Get the ean client.
     *
     * @return string Returns the ean client.
     */
    public function getEanClient() {
        return $this->eanClient;
    }

    /**
     * Set the ean client.
     *
     * @param string $eanClient The ean client.
     */
    public function setEanClient($eanClient) {
        $this->eanClient = $eanClient;
        return $this;
    }
}
