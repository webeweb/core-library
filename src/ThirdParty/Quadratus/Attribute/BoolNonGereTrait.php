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
 * Non gere trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNonGereTrait {

    /**
     * Non gere.
     *
     * @var bool
     */
    private $nonGere;

    /**
     * Get the non gere.
     *
     * @return bool Returns the non gere.
     */
    public function getNonGere() {
        return $this->nonGere;
    }

    /**
     * Set the non gere.
     *
     * @param bool $nonGere The non gere.
     */
    public function setNonGere($nonGere) {
        $this->nonGere = $nonGere;
        return $this;
    }
}
