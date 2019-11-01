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
 * Case38 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase38Trait {

    /**
     * Case38.
     *
     * @var bool
     */
    private $case38;

    /**
     * Get the case38.
     *
     * @return bool Returns the case38.
     */
    public function getCase38() {
        return $this->case38;
    }

    /**
     * Set the case38.
     *
     * @param bool $case38 The case38.
     */
    public function setCase38($case38) {
        $this->case38 = $case38;
        return $this;
    }
}
