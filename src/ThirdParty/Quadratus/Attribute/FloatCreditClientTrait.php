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
 * Credit client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCreditClientTrait {

    /**
     * Credit client.
     *
     * @var float
     */
    private $creditClient;

    /**
     * Get the credit client.
     *
     * @return float Returns the credit client.
     */
    public function getCreditClient() {
        return $this->creditClient;
    }

    /**
     * Set the credit client.
     *
     * @param float $creditClient The credit client.
     */
    public function setCreditClient($creditClient) {
        $this->creditClient = $creditClient;
        return $this;
    }
}
