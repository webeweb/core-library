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
 * Rep immo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRepImmoTrait {

    /**
     * Rep immo.
     *
     * @var bool
     */
    private $repImmo;

    /**
     * Get the rep immo.
     *
     * @return bool Returns the rep immo.
     */
    public function getRepImmo() {
        return $this->repImmo;
    }

    /**
     * Set the rep immo.
     *
     * @param bool $repImmo The rep immo.
     */
    public function setRepImmo($repImmo) {
        $this->repImmo = $repImmo;
        return $this;
    }
}
