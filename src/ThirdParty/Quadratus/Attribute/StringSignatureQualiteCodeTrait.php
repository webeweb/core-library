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
 * Signature qualite code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSignatureQualiteCodeTrait {

    /**
     * Signature qualite code.
     *
     * @var string
     */
    private $signatureQualiteCode;

    /**
     * Get the signature qualite code.
     *
     * @return string Returns the signature qualite code.
     */
    public function getSignatureQualiteCode() {
        return $this->signatureQualiteCode;
    }

    /**
     * Set the signature qualite code.
     *
     * @param string $signatureQualiteCode The signature qualite code.
     */
    public function setSignatureQualiteCode($signatureQualiteCode) {
        $this->signatureQualiteCode = $signatureQualiteCode;
        return $this;
    }
}
