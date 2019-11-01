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
 * Mot de passe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMotDePasseTrait {

    /**
     * Mot de passe.
     *
     * @var string
     */
    private $motDePasse;

    /**
     * Get the mot de passe.
     *
     * @return string Returns the mot de passe.
     */
    public function getMotDePasse() {
        return $this->motDePasse;
    }

    /**
     * Set the mot de passe.
     *
     * @param string $motDePasse The mot de passe.
     */
    public function setMotDePasse($motDePasse) {
        $this->motDePasse = $motDePasse;
        return $this;
    }
}
