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
 * Paiement depart le trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPaiementDepartLeTrait {

    /**
     * Paiement depart le.
     *
     * @var string
     */
    private $paiementDepartLe;

    /**
     * Get the paiement depart le.
     *
     * @return string Returns the paiement depart le.
     */
    public function getPaiementDepartLe() {
        return $this->paiementDepartLe;
    }

    /**
     * Set the paiement depart le.
     *
     * @param string $paiementDepartLe The paiement depart le.
     */
    public function setPaiementDepartLe($paiementDepartLe) {
        $this->paiementDepartLe = $paiementDepartLe;
        return $this;
    }
}
