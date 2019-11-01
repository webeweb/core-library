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
 * Immo detail par cpt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolImmoDetailParCptTrait {

    /**
     * Immo detail par cpt.
     *
     * @var bool
     */
    private $immoDetailParCpt;

    /**
     * Get the immo detail par cpt.
     *
     * @return bool Returns the immo detail par cpt.
     */
    public function getImmoDetailParCpt() {
        return $this->immoDetailParCpt;
    }

    /**
     * Set the immo detail par cpt.
     *
     * @param bool $immoDetailParCpt The immo detail par cpt.
     */
    public function setImmoDetailParCpt($immoDetailParCpt) {
        $this->immoDetailParCpt = $immoDetailParCpt;
        return $this;
    }
}
