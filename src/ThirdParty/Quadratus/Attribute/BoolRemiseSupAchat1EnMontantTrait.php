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
 * Remise sup achat1 en montant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRemiseSupAchat1EnMontantTrait {

    /**
     * Remise sup achat1 en montant.
     *
     * @var bool
     */
    private $remiseSupAchat1EnMontant;

    /**
     * Get the remise sup achat1 en montant.
     *
     * @return bool Returns the remise sup achat1 en montant.
     */
    public function getRemiseSupAchat1EnMontant() {
        return $this->remiseSupAchat1EnMontant;
    }

    /**
     * Set the remise sup achat1 en montant.
     *
     * @param bool $remiseSupAchat1EnMontant The remise sup achat1 en montant.
     */
    public function setRemiseSupAchat1EnMontant($remiseSupAchat1EnMontant) {
        $this->remiseSupAchat1EnMontant = $remiseSupAchat1EnMontant;
        return $this;
    }
}
