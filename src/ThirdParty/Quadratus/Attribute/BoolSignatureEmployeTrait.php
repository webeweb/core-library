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
 * Signature employe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSignatureEmployeTrait {

    /**
     * Signature employe.
     *
     * @var bool
     */
    private $signatureEmploye;

    /**
     * Get the signature employe.
     *
     * @return bool Returns the signature employe.
     */
    public function getSignatureEmploye() {
        return $this->signatureEmploye;
    }

    /**
     * Set the signature employe.
     *
     * @param bool $signatureEmploye The signature employe.
     */
    public function setSignatureEmploye($signatureEmploye) {
        $this->signatureEmploye = $signatureEmploye;
        return $this;
    }
}
