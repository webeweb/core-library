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
 * z0970b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz0970bTrait {

    /**
     * z0970b.
     *
     * @var float
     */
    private $z0970b;

    /**
     * Get the z0970b.
     *
     * @return float Returns the z0970b.
     */
    public function getz0970b() {
        return $this->z0970b;
    }

    /**
     * Set the z0970b.
     *
     * @param float $z0970b The z0970b.
     */
    public function setz0970b($z0970b) {
        $this->z0970b = $z0970b;
        return $this;
    }
}
