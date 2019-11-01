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
 * Personne morale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPersonneMoraleTrait {

    /**
     * Personne morale.
     *
     * @var bool
     */
    private $personneMorale;

    /**
     * Get the personne morale.
     *
     * @return bool Returns the personne morale.
     */
    public function getPersonneMorale() {
        return $this->personneMorale;
    }

    /**
     * Set the personne morale.
     *
     * @param bool $personneMorale The personne morale.
     */
    public function setPersonneMorale($personneMorale) {
        $this->personneMorale = $personneMorale;
        return $this;
    }
}
