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
 * Interimaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolInterimaireTrait {

    /**
     * Interimaire.
     *
     * @var bool
     */
    private $interimaire;

    /**
     * Get the interimaire.
     *
     * @return bool Returns the interimaire.
     */
    public function getInterimaire() {
        return $this->interimaire;
    }

    /**
     * Set the interimaire.
     *
     * @param bool $interimaire The interimaire.
     */
    public function setInterimaire($interimaire) {
        $this->interimaire = $interimaire;
        return $this;
    }
}
