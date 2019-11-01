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
 * Email auteur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEmailAuteurTrait {

    /**
     * Email auteur.
     *
     * @var string
     */
    private $emailAuteur;

    /**
     * Get the email auteur.
     *
     * @return string Returns the email auteur.
     */
    public function getEmailAuteur() {
        return $this->emailAuteur;
    }

    /**
     * Set the email auteur.
     *
     * @param string $emailAuteur The email auteur.
     */
    public function setEmailAuteur($emailAuteur) {
        $this->emailAuteur = $emailAuteur;
        return $this;
    }
}
