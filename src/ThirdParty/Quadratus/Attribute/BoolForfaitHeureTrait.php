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
 * Forfait heure trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolForfaitHeureTrait {

    /**
     * Forfait heure.
     *
     * @var bool
     */
    private $forfaitHeure;

    /**
     * Get the forfait heure.
     *
     * @return bool Returns the forfait heure.
     */
    public function getForfaitHeure() {
        return $this->forfaitHeure;
    }

    /**
     * Set the forfait heure.
     *
     * @param bool $forfaitHeure The forfait heure.
     */
    public function setForfaitHeure($forfaitHeure) {
        $this->forfaitHeure = $forfaitHeure;
        return $this;
    }
}
