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
 * Email objet defaut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEmailObjetDefautTrait {

    /**
     * Email objet defaut.
     *
     * @var string
     */
    private $emailObjetDefaut;

    /**
     * Get the email objet defaut.
     *
     * @return string Returns the email objet defaut.
     */
    public function getEmailObjetDefaut() {
        return $this->emailObjetDefaut;
    }

    /**
     * Set the email objet defaut.
     *
     * @param string $emailObjetDefaut The email objet defaut.
     */
    public function setEmailObjetDefaut($emailObjetDefaut) {
        $this->emailObjetDefaut = $emailObjetDefaut;
        return $this;
    }
}
