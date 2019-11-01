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
 * Transfert abs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTransfertAbsTrait {

    /**
     * Transfert abs.
     *
     * @var bool
     */
    private $transfertAbs;

    /**
     * Get the transfert abs.
     *
     * @return bool Returns the transfert abs.
     */
    public function getTransfertAbs() {
        return $this->transfertAbs;
    }

    /**
     * Set the transfert abs.
     *
     * @param bool $transfertAbs The transfert abs.
     */
    public function setTransfertAbs($transfertAbs) {
        $this->transfertAbs = $transfertAbs;
        return $this;
    }
}
