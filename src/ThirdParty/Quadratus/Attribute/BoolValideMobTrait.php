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
 * Valide mob trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolValideMobTrait {

    /**
     * Valide mob.
     *
     * @var bool
     */
    private $valideMob;

    /**
     * Get the valide mob.
     *
     * @return bool Returns the valide mob.
     */
    public function getValideMob() {
        return $this->valideMob;
    }

    /**
     * Set the valide mob.
     *
     * @param bool $valideMob The valide mob.
     */
    public function setValideMob($valideMob) {
        $this->valideMob = $valideMob;
        return $this;
    }
}
