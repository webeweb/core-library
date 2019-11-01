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
 * Anal diff trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAnalDiffTrait {

    /**
     * Anal diff.
     *
     * @var bool
     */
    private $analDiff;

    /**
     * Get the anal diff.
     *
     * @return bool Returns the anal diff.
     */
    public function getAnalDiff() {
        return $this->analDiff;
    }

    /**
     * Set the anal diff.
     *
     * @param bool $analDiff The anal diff.
     */
    public function setAnalDiff($analDiff) {
        $this->analDiff = $analDiff;
        return $this;
    }
}
