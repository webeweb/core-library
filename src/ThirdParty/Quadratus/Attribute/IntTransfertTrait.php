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
 * Transfert trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTransfertTrait {

    /**
     * Transfert.
     *
     * @var int
     */
    private $transfert;

    /**
     * Get the transfert.
     *
     * @return int Returns the transfert.
     */
    public function getTransfert() {
        return $this->transfert;
    }

    /**
     * Set the transfert.
     *
     * @param int $transfert The transfert.
     */
    public function setTransfert($transfert) {
        $this->transfert = $transfert;
        return $this;
    }
}
