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
 * Vue devis droit valid trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolVueDevisDroitValidTrait {

    /**
     * Vue devis droit valid.
     *
     * @var bool
     */
    private $vueDevisDroitValid;

    /**
     * Get the vue devis droit valid.
     *
     * @return bool Returns the vue devis droit valid.
     */
    public function getVueDevisDroitValid() {
        return $this->vueDevisDroitValid;
    }

    /**
     * Set the vue devis droit valid.
     *
     * @param bool $vueDevisDroitValid The vue devis droit valid.
     */
    public function setVueDevisDroitValid($vueDevisDroitValid) {
        $this->vueDevisDroitValid = $vueDevisDroitValid;
        return $this;
    }
}
