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
 * Date certificat emploi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateCertificatEmploiTrait {

    /**
     * Date certificat emploi.
     *
     * @var DateTime|null
     */
    private $dateCertificatEmploi;

    /**
     * Get the date certificat emploi.
     *
     * @return DateTime|null Returns the date certificat emploi.
     */
    public function getDateCertificatEmploi() {
        return $this->dateCertificatEmploi;
    }

    /**
     * Set the date certificat emploi.
     *
     * @param DateTime|null $dateCertificatEmploi The date certificat emploi.
     */
    public function setDateCertificatEmploi(DateTime $dateCertificatEmploi = null) {
        $this->dateCertificatEmploi = $dateCertificatEmploi;
        return $this;
    }
}
