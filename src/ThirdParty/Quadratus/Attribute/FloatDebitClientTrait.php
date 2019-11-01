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
 * Debit client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDebitClientTrait {

    /**
     * Debit client.
     *
     * @var float
     */
    private $debitClient;

    /**
     * Get the debit client.
     *
     * @return float Returns the debit client.
     */
    public function getDebitClient() {
        return $this->debitClient;
    }

    /**
     * Set the debit client.
     *
     * @param float $debitClient The debit client.
     */
    public function setDebitClient($debitClient) {
        $this->debitClient = $debitClient;
        return $this;
    }
}
