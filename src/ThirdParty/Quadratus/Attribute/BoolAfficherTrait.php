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
 * Afficher trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAfficherTrait {

    /**
     * Afficher.
     *
     * @var bool
     */
    private $afficher;

    /**
     * Get the afficher.
     *
     * @return bool Returns the afficher.
     */
    public function getAfficher() {
        return $this->afficher;
    }

    /**
     * Set the afficher.
     *
     * @param bool $afficher The afficher.
     */
    public function setAfficher($afficher) {
        $this->afficher = $afficher;
        return $this;
    }
}
