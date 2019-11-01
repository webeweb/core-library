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
 * Num groupe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumGroupeTrait {

    /**
     * Num groupe.
     *
     * @var int
     */
    private $numGroupe;

    /**
     * Get the num groupe.
     *
     * @return int Returns the num groupe.
     */
    public function getNumGroupe() {
        return $this->numGroupe;
    }

    /**
     * Set the num groupe.
     *
     * @param int $numGroupe The num groupe.
     */
    public function setNumGroupe($numGroupe) {
        $this->numGroupe = $numGroupe;
        return $this;
    }
}
