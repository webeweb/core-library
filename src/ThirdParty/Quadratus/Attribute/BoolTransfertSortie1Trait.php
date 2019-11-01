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
 * Transfert sortie1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTransfertSortie1Trait {

    /**
     * Transfert sortie1.
     *
     * @var bool
     */
    private $transfertSortie1;

    /**
     * Get the transfert sortie1.
     *
     * @return bool Returns the transfert sortie1.
     */
    public function getTransfertSortie1() {
        return $this->transfertSortie1;
    }

    /**
     * Set the transfert sortie1.
     *
     * @param bool $transfertSortie1 The transfert sortie1.
     */
    public function setTransfertSortie1($transfertSortie1) {
        $this->transfertSortie1 = $transfertSortie1;
        return $this;
    }
}
