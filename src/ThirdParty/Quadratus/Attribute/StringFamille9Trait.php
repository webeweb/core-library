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
 * Famille9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFamille9Trait {

    /**
     * Famille9.
     *
     * @var string
     */
    private $famille9;

    /**
     * Get the famille9.
     *
     * @return string Returns the famille9.
     */
    public function getFamille9() {
        return $this->famille9;
    }

    /**
     * Set the famille9.
     *
     * @param string $famille9 The famille9.
     */
    public function setFamille9($famille9) {
        $this->famille9 = $famille9;
        return $this;
    }
}
