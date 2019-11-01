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
 * Reference client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringReferenceClientTrait {

    /**
     * Reference client.
     *
     * @var string
     */
    private $referenceClient;

    /**
     * Get the reference client.
     *
     * @return string Returns the reference client.
     */
    public function getReferenceClient() {
        return $this->referenceClient;
    }

    /**
     * Set the reference client.
     *
     * @param string $referenceClient The reference client.
     */
    public function setReferenceClient($referenceClient) {
        $this->referenceClient = $referenceClient;
        return $this;
    }
}
