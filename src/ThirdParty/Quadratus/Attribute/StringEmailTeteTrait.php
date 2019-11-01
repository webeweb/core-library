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
 * Email tete trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEmailTeteTrait {

    /**
     * Email tete.
     *
     * @var string
     */
    private $emailTete;

    /**
     * Get the email tete.
     *
     * @return string Returns the email tete.
     */
    public function getEmailTete() {
        return $this->emailTete;
    }

    /**
     * Set the email tete.
     *
     * @param string $emailTete The email tete.
     */
    public function setEmailTete($emailTete) {
        $this->emailTete = $emailTete;
        return $this;
    }
}
