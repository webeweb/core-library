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
 * Mail attestations trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMailAttestationsTrait {

    /**
     * Mail attestations.
     *
     * @var string
     */
    private $mailAttestations;

    /**
     * Get the mail attestations.
     *
     * @return string Returns the mail attestations.
     */
    public function getMailAttestations() {
        return $this->mailAttestations;
    }

    /**
     * Set the mail attestations.
     *
     * @param string $mailAttestations The mail attestations.
     */
    public function setMailAttestations($mailAttestations) {
        $this->mailAttestations = $mailAttestations;
        return $this;
    }
}
