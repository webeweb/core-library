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
 * Compte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteTrait {

    /**
     * Compte.
     *
     * @var string
     */
    private $compte;

    /**
     * Get the compte.
     *
     * @return string Returns the compte.
     */
    public function getCompte() {
        return $this->compte;
    }

    /**
     * Set the compte.
     *
     * @param string $compte The compte.
     */
    public function setCompte($compte) {
        $this->compte = $compte;
        return $this;
    }
}
