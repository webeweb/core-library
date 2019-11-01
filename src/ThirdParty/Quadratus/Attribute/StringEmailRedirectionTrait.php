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
 * Email redirection trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEmailRedirectionTrait {

    /**
     * Email redirection.
     *
     * @var string
     */
    private $emailRedirection;

    /**
     * Get the email redirection.
     *
     * @return string Returns the email redirection.
     */
    public function getEmailRedirection() {
        return $this->emailRedirection;
    }

    /**
     * Set the email redirection.
     *
     * @param string $emailRedirection The email redirection.
     */
    public function setEmailRedirection($emailRedirection) {
        $this->emailRedirection = $emailRedirection;
        return $this;
    }
}
