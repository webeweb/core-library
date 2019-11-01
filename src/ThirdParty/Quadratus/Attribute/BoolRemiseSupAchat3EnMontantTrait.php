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
 * Remise sup achat3 en montant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRemiseSupAchat3EnMontantTrait {

    /**
     * Remise sup achat3 en montant.
     *
     * @var bool
     */
    private $remiseSupAchat3EnMontant;

    /**
     * Get the remise sup achat3 en montant.
     *
     * @return bool Returns the remise sup achat3 en montant.
     */
    public function getRemiseSupAchat3EnMontant() {
        return $this->remiseSupAchat3EnMontant;
    }

    /**
     * Set the remise sup achat3 en montant.
     *
     * @param bool $remiseSupAchat3EnMontant The remise sup achat3 en montant.
     */
    public function setRemiseSupAchat3EnMontant($remiseSupAchat3EnMontant) {
        $this->remiseSupAchat3EnMontant = $remiseSupAchat3EnMontant;
        return $this;
    }
}
