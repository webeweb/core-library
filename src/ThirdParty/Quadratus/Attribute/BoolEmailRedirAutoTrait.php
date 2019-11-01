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
 * Email redir auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEmailRedirAutoTrait {

    /**
     * Email redir auto.
     *
     * @var bool
     */
    private $emailRedirAuto;

    /**
     * Get the email redir auto.
     *
     * @return bool Returns the email redir auto.
     */
    public function getEmailRedirAuto() {
        return $this->emailRedirAuto;
    }

    /**
     * Set the email redir auto.
     *
     * @param bool $emailRedirAuto The email redir auto.
     */
    public function setEmailRedirAuto($emailRedirAuto) {
        $this->emailRedirAuto = $emailRedirAuto;
        return $this;
    }
}
