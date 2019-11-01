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
 * Pourcent act force trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntPourcentActForceTrait {

    /**
     * Pourcent act force.
     *
     * @var int
     */
    private $pourcentActForce;

    /**
     * Get the pourcent act force.
     *
     * @return int Returns the pourcent act force.
     */
    public function getPourcentActForce() {
        return $this->pourcentActForce;
    }

    /**
     * Set the pourcent act force.
     *
     * @param int $pourcentActForce The pourcent act force.
     */
    public function setPourcentActForce($pourcentActForce) {
        $this->pourcentActForce = $pourcentActForce;
        return $this;
    }
}
