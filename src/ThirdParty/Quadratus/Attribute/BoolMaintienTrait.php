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
 * Maintien trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMaintienTrait {

    /**
     * Maintien.
     *
     * @var bool
     */
    private $maintien;

    /**
     * Get the maintien.
     *
     * @return bool Returns the maintien.
     */
    public function getMaintien() {
        return $this->maintien;
    }

    /**
     * Set the maintien.
     *
     * @param bool $maintien The maintien.
     */
    public function setMaintien($maintien) {
        $this->maintien = $maintien;
        return $this;
    }
}
