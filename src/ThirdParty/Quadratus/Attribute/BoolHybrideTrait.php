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
 * Hybride trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolHybrideTrait {

    /**
     * Hybride.
     *
     * @var bool
     */
    private $hybride;

    /**
     * Get the hybride.
     *
     * @return bool Returns the hybride.
     */
    public function getHybride() {
        return $this->hybride;
    }

    /**
     * Set the hybride.
     *
     * @param bool $hybride The hybride.
     */
    public function setHybride($hybride) {
        $this->hybride = $hybride;
        return $this;
    }
}
