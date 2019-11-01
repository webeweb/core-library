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
 * Email mode signature trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntEmailModeSignatureTrait {

    /**
     * Email mode signature.
     *
     * @var int
     */
    private $emailModeSignature;

    /**
     * Get the email mode signature.
     *
     * @return int Returns the email mode signature.
     */
    public function getEmailModeSignature() {
        return $this->emailModeSignature;
    }

    /**
     * Set the email mode signature.
     *
     * @param int $emailModeSignature The email mode signature.
     */
    public function setEmailModeSignature($emailModeSignature) {
        $this->emailModeSignature = $emailModeSignature;
        return $this;
    }
}
