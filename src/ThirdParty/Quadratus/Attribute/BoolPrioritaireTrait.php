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
 * Prioritaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPrioritaireTrait {

    /**
     * Prioritaire.
     *
     * @var bool
     */
    private $prioritaire;

    /**
     * Get the prioritaire.
     *
     * @return bool Returns the prioritaire.
     */
    public function getPrioritaire() {
        return $this->prioritaire;
    }

    /**
     * Set the prioritaire.
     *
     * @param bool $prioritaire The prioritaire.
     */
    public function setPrioritaire($prioritaire) {
        $this->prioritaire = $prioritaire;
        return $this;
    }
}
