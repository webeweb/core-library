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
 * Signature code qualite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSignatureCodeQualiteTrait {

    /**
     * Signature code qualite.
     *
     * @var string
     */
    private $signatureCodeQualite;

    /**
     * Get the signature code qualite.
     *
     * @return string Returns the signature code qualite.
     */
    public function getSignatureCodeQualite() {
        return $this->signatureCodeQualite;
    }

    /**
     * Set the signature code qualite.
     *
     * @param string $signatureCodeQualite The signature code qualite.
     */
    public function setSignatureCodeQualite($signatureCodeQualite) {
        $this->signatureCodeQualite = $signatureCodeQualite;
        return $this;
    }
}
