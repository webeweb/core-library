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
 * Immo ss tot immo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolImmoSsTotImmoTrait {

    /**
     * Immo ss tot immo.
     *
     * @var bool
     */
    private $immoSsTotImmo;

    /**
     * Get the immo ss tot immo.
     *
     * @return bool Returns the immo ss tot immo.
     */
    public function getImmoSsTotImmo() {
        return $this->immoSsTotImmo;
    }

    /**
     * Set the immo ss tot immo.
     *
     * @param bool $immoSsTotImmo The immo ss tot immo.
     */
    public function setImmoSsTotImmo($immoSsTotImmo) {
        $this->immoSsTotImmo = $immoSsTotImmo;
        return $this;
    }
}
