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
 * Maj descriptif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMajDescriptifTrait {

    /**
     * Maj descriptif.
     *
     * @var bool
     */
    private $majDescriptif;

    /**
     * Get the maj descriptif.
     *
     * @return bool Returns the maj descriptif.
     */
    public function getMajDescriptif() {
        return $this->majDescriptif;
    }

    /**
     * Set the maj descriptif.
     *
     * @param bool $majDescriptif The maj descriptif.
     */
    public function setMajDescriptif($majDescriptif) {
        $this->majDescriptif = $majDescriptif;
        return $this;
    }
}
