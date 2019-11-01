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
 * Pj envoi mail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPjEnvoiMailTrait {

    /**
     * Pj envoi mail.
     *
     * @var string
     */
    private $pjEnvoiMail;

    /**
     * Get the pj envoi mail.
     *
     * @return string Returns the pj envoi mail.
     */
    public function getPjEnvoiMail() {
        return $this->pjEnvoiMail;
    }

    /**
     * Set the pj envoi mail.
     *
     * @param string $pjEnvoiMail The pj envoi mail.
     */
    public function setPjEnvoiMail($pjEnvoiMail) {
        $this->pjEnvoiMail = $pjEnvoiMail;
        return $this;
    }
}
