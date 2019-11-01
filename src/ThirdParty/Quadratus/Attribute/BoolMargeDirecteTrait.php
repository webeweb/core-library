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
 * Marge directe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMargeDirecteTrait {

    /**
     * Marge directe.
     *
     * @var bool
     */
    private $margeDirecte;

    /**
     * Get the marge directe.
     *
     * @return bool Returns the marge directe.
     */
    public function getMargeDirecte() {
        return $this->margeDirecte;
    }

    /**
     * Set the marge directe.
     *
     * @param bool $margeDirecte The marge directe.
     */
    public function setMargeDirecte($margeDirecte) {
        $this->margeDirecte = $margeDirecte;
        return $this;
    }
}
