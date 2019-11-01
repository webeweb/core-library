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
 * Transfert immo ok trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTransfertImmoOkTrait {

    /**
     * Transfert immo ok.
     *
     * @var bool
     */
    private $transfertImmoOk;

    /**
     * Get the transfert immo ok.
     *
     * @return bool Returns the transfert immo ok.
     */
    public function getTransfertImmoOk() {
        return $this->transfertImmoOk;
    }

    /**
     * Set the transfert immo ok.
     *
     * @param bool $transfertImmoOk The transfert immo ok.
     */
    public function setTransfertImmoOk($transfertImmoOk) {
        $this->transfertImmoOk = $transfertImmoOk;
        return $this;
    }
}
