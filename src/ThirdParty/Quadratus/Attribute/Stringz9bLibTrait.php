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
 * z9b lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Stringz9bLibTrait {

    /**
     * z9b lib.
     *
     * @var string
     */
    private $z9bLib;

    /**
     * Get the z9b lib.
     *
     * @return string Returns the z9b lib.
     */
    public function getz9bLib() {
        return $this->z9bLib;
    }

    /**
     * Set the z9b lib.
     *
     * @param string $z9bLib The z9b lib.
     */
    public function setz9bLib($z9bLib) {
        $this->z9bLib = $z9bLib;
        return $this;
    }
}
