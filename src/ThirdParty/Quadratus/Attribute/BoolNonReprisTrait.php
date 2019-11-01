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
 * Non repris trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNonReprisTrait {

    /**
     * Non repris.
     *
     * @var bool
     */
    private $nonRepris;

    /**
     * Get the non repris.
     *
     * @return bool Returns the non repris.
     */
    public function getNonRepris() {
        return $this->nonRepris;
    }

    /**
     * Set the non repris.
     *
     * @param bool $nonRepris The non repris.
     */
    public function setNonRepris($nonRepris) {
        $this->nonRepris = $nonRepris;
        return $this;
    }
}
