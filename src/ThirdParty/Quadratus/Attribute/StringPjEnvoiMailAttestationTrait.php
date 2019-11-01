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
 * Pj envoi mail attestation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPjEnvoiMailAttestationTrait {

    /**
     * Pj envoi mail attestation.
     *
     * @var string
     */
    private $pjEnvoiMailAttestation;

    /**
     * Get the pj envoi mail attestation.
     *
     * @return string Returns the pj envoi mail attestation.
     */
    public function getPjEnvoiMailAttestation() {
        return $this->pjEnvoiMailAttestation;
    }

    /**
     * Set the pj envoi mail attestation.
     *
     * @param string $pjEnvoiMailAttestation The pj envoi mail attestation.
     */
    public function setPjEnvoiMailAttestation($pjEnvoiMailAttestation) {
        $this->pjEnvoiMailAttestation = $pjEnvoiMailAttestation;
        return $this;
    }
}
