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
 * Transfert sortie2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTransfertSortie2Trait {

    /**
     * Transfert sortie2.
     *
     * @var bool
     */
    private $transfertSortie2;

    /**
     * Get the transfert sortie2.
     *
     * @return bool Returns the transfert sortie2.
     */
    public function getTransfertSortie2() {
        return $this->transfertSortie2;
    }

    /**
     * Set the transfert sortie2.
     *
     * @param bool $transfertSortie2 The transfert sortie2.
     */
    public function setTransfertSortie2($transfertSortie2) {
        $this->transfertSortie2 = $transfertSortie2;
        return $this;
    }
}
