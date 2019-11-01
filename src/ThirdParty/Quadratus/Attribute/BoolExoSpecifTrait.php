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
 * Exo specif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolExoSpecifTrait {

    /**
     * Exo specif.
     *
     * @var bool
     */
    private $exoSpecif;

    /**
     * Get the exo specif.
     *
     * @return bool Returns the exo specif.
     */
    public function getExoSpecif() {
        return $this->exoSpecif;
    }

    /**
     * Set the exo specif.
     *
     * @param bool $exoSpecif The exo specif.
     */
    public function setExoSpecif($exoSpecif) {
        $this->exoSpecif = $exoSpecif;
        return $this;
    }
}
