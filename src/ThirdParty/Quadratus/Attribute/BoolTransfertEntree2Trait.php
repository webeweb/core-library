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
 * Transfert entree2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTransfertEntree2Trait {

    /**
     * Transfert entree2.
     *
     * @var bool
     */
    private $transfertEntree2;

    /**
     * Get the transfert entree2.
     *
     * @return bool Returns the transfert entree2.
     */
    public function getTransfertEntree2() {
        return $this->transfertEntree2;
    }

    /**
     * Set the transfert entree2.
     *
     * @param bool $transfertEntree2 The transfert entree2.
     */
    public function setTransfertEntree2($transfertEntree2) {
        $this->transfertEntree2 = $transfertEntree2;
        return $this;
    }
}
