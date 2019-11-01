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
 * Modifiable trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolModifiableTrait {

    /**
     * Modifiable.
     *
     * @var bool
     */
    private $modifiable;

    /**
     * Get the modifiable.
     *
     * @return bool Returns the modifiable.
     */
    public function getModifiable() {
        return $this->modifiable;
    }

    /**
     * Set the modifiable.
     *
     * @param bool $modifiable The modifiable.
     */
    public function setModifiable($modifiable) {
        $this->modifiable = $modifiable;
        return $this;
    }
}
