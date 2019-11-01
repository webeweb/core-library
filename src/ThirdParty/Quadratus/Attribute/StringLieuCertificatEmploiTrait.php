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
 * Lieu certificat emploi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLieuCertificatEmploiTrait {

    /**
     * Lieu certificat emploi.
     *
     * @var string
     */
    private $lieuCertificatEmploi;

    /**
     * Get the lieu certificat emploi.
     *
     * @return string Returns the lieu certificat emploi.
     */
    public function getLieuCertificatEmploi() {
        return $this->lieuCertificatEmploi;
    }

    /**
     * Set the lieu certificat emploi.
     *
     * @param string $lieuCertificatEmploi The lieu certificat emploi.
     */
    public function setLieuCertificatEmploi($lieuCertificatEmploi) {
        $this->lieuCertificatEmploi = $lieuCertificatEmploi;
        return $this;
    }
}
