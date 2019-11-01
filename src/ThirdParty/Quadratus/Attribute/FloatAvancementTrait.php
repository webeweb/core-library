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
 * Avancement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAvancementTrait {

    /**
     * Avancement.
     *
     * @var float
     */
    private $avancement;

    /**
     * Get the avancement.
     *
     * @return float Returns the avancement.
     */
    public function getAvancement() {
        return $this->avancement;
    }

    /**
     * Set the avancement.
     *
     * @param float $avancement The avancement.
     */
    public function setAvancement($avancement) {
        $this->avancement = $avancement;
        return $this;
    }
}
