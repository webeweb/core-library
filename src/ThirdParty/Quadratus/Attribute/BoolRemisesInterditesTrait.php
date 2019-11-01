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
 * Remises interdites trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRemisesInterditesTrait {

    /**
     * Remises interdites.
     *
     * @var bool
     */
    private $remisesInterdites;

    /**
     * Get the remises interdites.
     *
     * @return bool Returns the remises interdites.
     */
    public function getRemisesInterdites() {
        return $this->remisesInterdites;
    }

    /**
     * Set the remises interdites.
     *
     * @param bool $remisesInterdites The remises interdites.
     */
    public function setRemisesInterdites($remisesInterdites) {
        $this->remisesInterdites = $remisesInterdites;
        return $this;
    }
}
