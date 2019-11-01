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
 * Etbl mail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtblMailTrait {

    /**
     * Etbl mail.
     *
     * @var string
     */
    private $etblMail;

    /**
     * Get the etbl mail.
     *
     * @return string Returns the etbl mail.
     */
    public function getEtblMail() {
        return $this->etblMail;
    }

    /**
     * Set the etbl mail.
     *
     * @param string $etblMail The etbl mail.
     */
    public function setEtblMail($etblMail) {
        $this->etblMail = $etblMail;
        return $this;
    }
}
