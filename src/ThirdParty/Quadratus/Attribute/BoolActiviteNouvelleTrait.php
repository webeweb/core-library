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
 * Activite nouvelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolActiviteNouvelleTrait {

    /**
     * Activite nouvelle.
     *
     * @var bool
     */
    private $activiteNouvelle;

    /**
     * Get the activite nouvelle.
     *
     * @return bool Returns the activite nouvelle.
     */
    public function getActiviteNouvelle() {
        return $this->activiteNouvelle;
    }

    /**
     * Set the activite nouvelle.
     *
     * @param bool $activiteNouvelle The activite nouvelle.
     */
    public function setActiviteNouvelle($activiteNouvelle) {
        $this->activiteNouvelle = $activiteNouvelle;
        return $this;
    }
}
