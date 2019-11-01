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
 * Contrepartie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolContrepartieTrait {

    /**
     * Contrepartie.
     *
     * @var bool
     */
    private $contrepartie;

    /**
     * Get the contrepartie.
     *
     * @return bool Returns the contrepartie.
     */
    public function getContrepartie() {
        return $this->contrepartie;
    }

    /**
     * Set the contrepartie.
     *
     * @param bool $contrepartie The contrepartie.
     */
    public function setContrepartie($contrepartie) {
        $this->contrepartie = $contrepartie;
        return $this;
    }
}
