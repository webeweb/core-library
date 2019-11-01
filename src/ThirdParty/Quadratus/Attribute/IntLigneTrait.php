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
 * Ligne trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntLigneTrait {

    /**
     * Ligne.
     *
     * @var int
     */
    private $ligne;

    /**
     * Get the ligne.
     *
     * @return int Returns the ligne.
     */
    public function getLigne() {
        return $this->ligne;
    }

    /**
     * Set the ligne.
     *
     * @param int $ligne The ligne.
     */
    public function setLigne($ligne) {
        $this->ligne = $ligne;
        return $this;
    }
}
