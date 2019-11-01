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
 * Adresse email trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdresseEmailTrait {

    /**
     * Adresse email.
     *
     * @var string
     */
    private $adresseEmail;

    /**
     * Get the adresse email.
     *
     * @return string Returns the adresse email.
     */
    public function getAdresseEmail() {
        return $this->adresseEmail;
    }

    /**
     * Set the adresse email.
     *
     * @param string $adresseEmail The adresse email.
     */
    public function setAdresseEmail($adresseEmail) {
        $this->adresseEmail = $adresseEmail;
        return $this;
    }
}
