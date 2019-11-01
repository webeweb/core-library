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
 * Vue devis droit reaffect trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolVueDevisDroitReaffectTrait {

    /**
     * Vue devis droit reaffect.
     *
     * @var bool
     */
    private $vueDevisDroitReaffect;

    /**
     * Get the vue devis droit reaffect.
     *
     * @return bool Returns the vue devis droit reaffect.
     */
    public function getVueDevisDroitReaffect() {
        return $this->vueDevisDroitReaffect;
    }

    /**
     * Set the vue devis droit reaffect.
     *
     * @param bool $vueDevisDroitReaffect The vue devis droit reaffect.
     */
    public function setVueDevisDroitReaffect($vueDevisDroitReaffect) {
        $this->vueDevisDroitReaffect = $vueDevisDroitReaffect;
        return $this;
    }
}
