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

use DateTime;

/**
 * Date attestation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateAttestationTrait {

    /**
     * Date attestation.
     *
     * @var DateTime|null
     */
    private $dateAttestation;

    /**
     * Get the date attestation.
     *
     * @return DateTime|null Returns the date attestation.
     */
    public function getDateAttestation() {
        return $this->dateAttestation;
    }

    /**
     * Set the date attestation.
     *
     * @param DateTime|null $dateAttestation The date attestation.
     */
    public function setDateAttestation(DateTime $dateAttestation = null) {
        $this->dateAttestation = $dateAttestation;
        return $this;
    }
}
