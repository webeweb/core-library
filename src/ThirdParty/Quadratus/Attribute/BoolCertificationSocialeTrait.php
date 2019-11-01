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
 * Certification sociale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCertificationSocialeTrait {

    /**
     * Certification sociale.
     *
     * @var bool
     */
    private $certificationSociale;

    /**
     * Get the certification sociale.
     *
     * @return bool Returns the certification sociale.
     */
    public function getCertificationSociale() {
        return $this->certificationSociale;
    }

    /**
     * Set the certification sociale.
     *
     * @param bool $certificationSociale The certification sociale.
     */
    public function setCertificationSociale($certificationSociale) {
        $this->certificationSociale = $certificationSociale;
        return $this;
    }
}
