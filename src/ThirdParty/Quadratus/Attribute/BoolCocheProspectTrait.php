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
 * Coche prospect trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCocheProspectTrait {

    /**
     * Coche prospect.
     *
     * @var bool
     */
    private $cocheProspect;

    /**
     * Get the coche prospect.
     *
     * @return bool Returns the coche prospect.
     */
    public function getCocheProspect() {
        return $this->cocheProspect;
    }

    /**
     * Set the coche prospect.
     *
     * @param bool $cocheProspect The coche prospect.
     */
    public function setCocheProspect($cocheProspect) {
        $this->cocheProspect = $cocheProspect;
        return $this;
    }
}
