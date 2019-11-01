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
 * Fait tvs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFaitTvsTrait {

    /**
     * Fait tvs.
     *
     * @var string
     */
    private $faitTvs;

    /**
     * Get the fait tvs.
     *
     * @return string Returns the fait tvs.
     */
    public function getFaitTvs() {
        return $this->faitTvs;
    }

    /**
     * Set the fait tvs.
     *
     * @param string $faitTvs The fait tvs.
     */
    public function setFaitTvs($faitTvs) {
        $this->faitTvs = $faitTvs;
        return $this;
    }
}
