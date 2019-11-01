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
 * Gamme trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntGammeTrait {

    /**
     * Gamme.
     *
     * @var int
     */
    private $gamme;

    /**
     * Get the gamme.
     *
     * @return int Returns the gamme.
     */
    public function getGamme() {
        return $this->gamme;
    }

    /**
     * Set the gamme.
     *
     * @param int $gamme The gamme.
     */
    public function setGamme($gamme) {
        $this->gamme = $gamme;
        return $this;
    }
}
