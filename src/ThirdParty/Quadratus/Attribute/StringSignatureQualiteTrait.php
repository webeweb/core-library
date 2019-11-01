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
 * Signature qualite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSignatureQualiteTrait {

    /**
     * Signature qualite.
     *
     * @var string
     */
    private $signatureQualite;

    /**
     * Get the signature qualite.
     *
     * @return string Returns the signature qualite.
     */
    public function getSignatureQualite() {
        return $this->signatureQualite;
    }

    /**
     * Set the signature qualite.
     *
     * @param string $signatureQualite The signature qualite.
     */
    public function setSignatureQualite($signatureQualite) {
        $this->signatureQualite = $signatureQualite;
        return $this;
    }
}
