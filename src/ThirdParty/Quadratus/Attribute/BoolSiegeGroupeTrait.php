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
 * Siege groupe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSiegeGroupeTrait {

    /**
     * Siege groupe.
     *
     * @var bool
     */
    private $siegeGroupe;

    /**
     * Get the siege groupe.
     *
     * @return bool Returns the siege groupe.
     */
    public function getSiegeGroupe() {
        return $this->siegeGroupe;
    }

    /**
     * Set the siege groupe.
     *
     * @param bool $siegeGroupe The siege groupe.
     */
    public function setSiegeGroupe($siegeGroupe) {
        $this->siegeGroupe = $siegeGroupe;
        return $this;
    }
}
