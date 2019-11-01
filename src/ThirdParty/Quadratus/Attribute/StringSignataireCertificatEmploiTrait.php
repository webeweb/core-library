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
 * Signataire certificat emploi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSignataireCertificatEmploiTrait {

    /**
     * Signataire certificat emploi.
     *
     * @var string
     */
    private $signataireCertificatEmploi;

    /**
     * Get the signataire certificat emploi.
     *
     * @return string Returns the signataire certificat emploi.
     */
    public function getSignataireCertificatEmploi() {
        return $this->signataireCertificatEmploi;
    }

    /**
     * Set the signataire certificat emploi.
     *
     * @param string $signataireCertificatEmploi The signataire certificat emploi.
     */
    public function setSignataireCertificatEmploi($signataireCertificatEmploi) {
        $this->signataireCertificatEmploi = $signataireCertificatEmploi;
        return $this;
    }
}
