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
 * Transfert sortie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTransfertSortieTrait {

    /**
     * Transfert sortie.
     *
     * @var bool
     */
    private $transfertSortie;

    /**
     * Get the transfert sortie.
     *
     * @return bool Returns the transfert sortie.
     */
    public function getTransfertSortie() {
        return $this->transfertSortie;
    }

    /**
     * Set the transfert sortie.
     *
     * @param bool $transfertSortie The transfert sortie.
     */
    public function setTransfertSortie($transfertSortie) {
        $this->transfertSortie = $transfertSortie;
        return $this;
    }
}
