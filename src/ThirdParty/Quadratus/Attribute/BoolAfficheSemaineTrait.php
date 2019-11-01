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
 * Affiche semaine trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAfficheSemaineTrait {

    /**
     * Affiche semaine.
     *
     * @var bool
     */
    private $afficheSemaine;

    /**
     * Get the affiche semaine.
     *
     * @return bool Returns the affiche semaine.
     */
    public function getAfficheSemaine() {
        return $this->afficheSemaine;
    }

    /**
     * Set the affiche semaine.
     *
     * @param bool $afficheSemaine The affiche semaine.
     */
    public function setAfficheSemaine($afficheSemaine) {
        $this->afficheSemaine = $afficheSemaine;
        return $this;
    }
}
