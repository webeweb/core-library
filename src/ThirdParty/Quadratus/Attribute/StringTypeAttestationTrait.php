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
 * Type attestation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeAttestationTrait {

    /**
     * Type attestation.
     *
     * @var string
     */
    private $typeAttestation;

    /**
     * Get the type attestation.
     *
     * @return string Returns the type attestation.
     */
    public function getTypeAttestation() {
        return $this->typeAttestation;
    }

    /**
     * Set the type attestation.
     *
     * @param string $typeAttestation The type attestation.
     */
    public function setTypeAttestation($typeAttestation) {
        $this->typeAttestation = $typeAttestation;
        return $this;
    }
}
