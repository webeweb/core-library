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
 * Indemnite non imposable trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolIndemniteNonImposableTrait {

    /**
     * Indemnite non imposable.
     *
     * @var bool
     */
    private $indemniteNonImposable;

    /**
     * Get the indemnite non imposable.
     *
     * @return bool Returns the indemnite non imposable.
     */
    public function getIndemniteNonImposable() {
        return $this->indemniteNonImposable;
    }

    /**
     * Set the indemnite non imposable.
     *
     * @param bool $indemniteNonImposable The indemnite non imposable.
     */
    public function setIndemniteNonImposable($indemniteNonImposable) {
        $this->indemniteNonImposable = $indemniteNonImposable;
        return $this;
    }
}
