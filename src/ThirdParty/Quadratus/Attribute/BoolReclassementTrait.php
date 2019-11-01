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
 * Reclassement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolReclassementTrait {

    /**
     * Reclassement.
     *
     * @var bool
     */
    private $reclassement;

    /**
     * Get the reclassement.
     *
     * @return bool Returns the reclassement.
     */
    public function getReclassement() {
        return $this->reclassement;
    }

    /**
     * Set the reclassement.
     *
     * @param bool $reclassement The reclassement.
     */
    public function setReclassement($reclassement) {
        $this->reclassement = $reclassement;
        return $this;
    }
}
