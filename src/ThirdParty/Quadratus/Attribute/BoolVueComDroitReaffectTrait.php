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
 * Vue com droit reaffect trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolVueComDroitReaffectTrait {

    /**
     * Vue com droit reaffect.
     *
     * @var bool
     */
    private $vueComDroitReaffect;

    /**
     * Get the vue com droit reaffect.
     *
     * @return bool Returns the vue com droit reaffect.
     */
    public function getVueComDroitReaffect() {
        return $this->vueComDroitReaffect;
    }

    /**
     * Set the vue com droit reaffect.
     *
     * @param bool $vueComDroitReaffect The vue com droit reaffect.
     */
    public function setVueComDroitReaffect($vueComDroitReaffect) {
        $this->vueComDroitReaffect = $vueComDroitReaffect;
        return $this;
    }
}
