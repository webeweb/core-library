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
 * Email sur serveur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEmailSurServeurTrait {

    /**
     * Email sur serveur.
     *
     * @var bool
     */
    private $emailSurServeur;

    /**
     * Get the email sur serveur.
     *
     * @return bool Returns the email sur serveur.
     */
    public function getEmailSurServeur() {
        return $this->emailSurServeur;
    }

    /**
     * Set the email sur serveur.
     *
     * @param bool $emailSurServeur The email sur serveur.
     */
    public function setEmailSurServeur($emailSurServeur) {
        $this->emailSurServeur = $emailSurServeur;
        return $this;
    }
}
