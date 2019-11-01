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
 * Signature contact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSignatureContactTrait {

    /**
     * Signature contact.
     *
     * @var string
     */
    private $signatureContact;

    /**
     * Get the signature contact.
     *
     * @return string Returns the signature contact.
     */
    public function getSignatureContact() {
        return $this->signatureContact;
    }

    /**
     * Set the signature contact.
     *
     * @param string $signatureContact The signature contact.
     */
    public function setSignatureContact($signatureContact) {
        $this->signatureContact = $signatureContact;
        return $this;
    }
}
