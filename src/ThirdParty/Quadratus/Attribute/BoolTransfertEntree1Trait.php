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
 * Transfert entree1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTransfertEntree1Trait {

    /**
     * Transfert entree1.
     *
     * @var bool
     */
    private $transfertEntree1;

    /**
     * Get the transfert entree1.
     *
     * @return bool Returns the transfert entree1.
     */
    public function getTransfertEntree1() {
        return $this->transfertEntree1;
    }

    /**
     * Set the transfert entree1.
     *
     * @param bool $transfertEntree1 The transfert entree1.
     */
    public function setTransfertEntree1($transfertEntree1) {
        $this->transfertEntree1 = $transfertEntree1;
        return $this;
    }
}
