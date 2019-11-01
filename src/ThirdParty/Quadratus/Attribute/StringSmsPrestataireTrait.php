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
 * Sms prestataire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSmsPrestataireTrait {

    /**
     * Sms prestataire.
     *
     * @var string
     */
    private $smsPrestataire;

    /**
     * Get the sms prestataire.
     *
     * @return string Returns the sms prestataire.
     */
    public function getSmsPrestataire() {
        return $this->smsPrestataire;
    }

    /**
     * Set the sms prestataire.
     *
     * @param string $smsPrestataire The sms prestataire.
     */
    public function setSmsPrestataire($smsPrestataire) {
        $this->smsPrestataire = $smsPrestataire;
        return $this;
    }
}
