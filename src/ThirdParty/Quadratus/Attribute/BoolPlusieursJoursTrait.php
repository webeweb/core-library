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
 * Plusieurs jours trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPlusieursJoursTrait {

    /**
     * Plusieurs jours.
     *
     * @var bool
     */
    private $plusieursJours;

    /**
     * Get the plusieurs jours.
     *
     * @return bool Returns the plusieurs jours.
     */
    public function getPlusieursJours() {
        return $this->plusieursJours;
    }

    /**
     * Set the plusieurs jours.
     *
     * @param bool $plusieursJours The plusieurs jours.
     */
    public function setPlusieursJours($plusieursJours) {
        $this->plusieursJours = $plusieursJours;
        return $this;
    }
}
