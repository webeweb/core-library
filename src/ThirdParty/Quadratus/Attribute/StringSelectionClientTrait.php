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
 * Selection client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSelectionClientTrait {

    /**
     * Selection client.
     *
     * @var string
     */
    private $selectionClient;

    /**
     * Get the selection client.
     *
     * @return string Returns the selection client.
     */
    public function getSelectionClient() {
        return $this->selectionClient;
    }

    /**
     * Set the selection client.
     *
     * @param string $selectionClient The selection client.
     */
    public function setSelectionClient($selectionClient) {
        $this->selectionClient = $selectionClient;
        return $this;
    }
}
