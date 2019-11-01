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
 * Transfere trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTransfereTrait {

    /**
     * Transfere.
     *
     * @var string
     */
    private $transfere;

    /**
     * Get the transfere.
     *
     * @return string Returns the transfere.
     */
    public function getTransfere() {
        return $this->transfere;
    }

    /**
     * Set the transfere.
     *
     * @param string $transfere The transfere.
     */
    public function setTransfere($transfere) {
        $this->transfere = $transfere;
        return $this;
    }
}
