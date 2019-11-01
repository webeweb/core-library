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
 * Avec pied trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAvecPiedTrait {

    /**
     * Avec pied.
     *
     * @var bool
     */
    private $avecPied;

    /**
     * Get the avec pied.
     *
     * @return bool Returns the avec pied.
     */
    public function getAvecPied() {
        return $this->avecPied;
    }

    /**
     * Set the avec pied.
     *
     * @param bool $avecPied The avec pied.
     */
    public function setAvecPied($avecPied) {
        $this->avecPied = $avecPied;
        return $this;
    }
}
