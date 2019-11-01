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
 * Email redir auto collab trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEmailRedirAutoCollabTrait {

    /**
     * Email redir auto collab.
     *
     * @var string
     */
    private $emailRedirAutoCollab;

    /**
     * Get the email redir auto collab.
     *
     * @return string Returns the email redir auto collab.
     */
    public function getEmailRedirAutoCollab() {
        return $this->emailRedirAutoCollab;
    }

    /**
     * Set the email redir auto collab.
     *
     * @param string $emailRedirAutoCollab The email redir auto collab.
     */
    public function setEmailRedirAutoCollab($emailRedirAutoCollab) {
        $this->emailRedirAutoCollab = $emailRedirAutoCollab;
        return $this;
    }
}
