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
 * Transfert entree trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTransfertEntreeTrait {

    /**
     * Transfert entree.
     *
     * @var bool
     */
    private $transfertEntree;

    /**
     * Get the transfert entree.
     *
     * @return bool Returns the transfert entree.
     */
    public function getTransfertEntree() {
        return $this->transfertEntree;
    }

    /**
     * Set the transfert entree.
     *
     * @param bool $transfertEntree The transfert entree.
     */
    public function setTransfertEntree($transfertEntree) {
        $this->transfertEntree = $transfertEntree;
        return $this;
    }
}
