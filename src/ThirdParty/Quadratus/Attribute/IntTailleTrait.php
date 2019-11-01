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
 * Taille trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTailleTrait {

    /**
     * Taille.
     *
     * @var int
     */
    private $taille;

    /**
     * Get the taille.
     *
     * @return int Returns the taille.
     */
    public function getTaille() {
        return $this->taille;
    }

    /**
     * Set the taille.
     *
     * @param int $taille The taille.
     */
    public function setTaille($taille) {
        $this->taille = $taille;
        return $this;
    }
}
