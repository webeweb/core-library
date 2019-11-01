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
 * Certif auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCertifAutoTrait {

    /**
     * Certif auto.
     *
     * @var bool
     */
    private $certifAuto;

    /**
     * Get the certif auto.
     *
     * @return bool Returns the certif auto.
     */
    public function getCertifAuto() {
        return $this->certifAuto;
    }

    /**
     * Set the certif auto.
     *
     * @param bool $certifAuto The certif auto.
     */
    public function setCertifAuto($certifAuto) {
        $this->certifAuto = $certifAuto;
        return $this;
    }
}
