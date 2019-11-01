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
 * Remise sup achat2 en montant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRemiseSupAchat2EnMontantTrait {

    /**
     * Remise sup achat2 en montant.
     *
     * @var bool
     */
    private $remiseSupAchat2EnMontant;

    /**
     * Get the remise sup achat2 en montant.
     *
     * @return bool Returns the remise sup achat2 en montant.
     */
    public function getRemiseSupAchat2EnMontant() {
        return $this->remiseSupAchat2EnMontant;
    }

    /**
     * Set the remise sup achat2 en montant.
     *
     * @param bool $remiseSupAchat2EnMontant The remise sup achat2 en montant.
     */
    public function setRemiseSupAchat2EnMontant($remiseSupAchat2EnMontant) {
        $this->remiseSupAchat2EnMontant = $remiseSupAchat2EnMontant;
        return $this;
    }
}
