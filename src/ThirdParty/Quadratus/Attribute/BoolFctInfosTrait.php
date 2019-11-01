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
 * Fct infos trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFctInfosTrait {

    /**
     * Fct infos.
     *
     * @var bool
     */
    private $fctInfos;

    /**
     * Get the fct infos.
     *
     * @return bool Returns the fct infos.
     */
    public function getFctInfos() {
        return $this->fctInfos;
    }

    /**
     * Set the fct infos.
     *
     * @param bool $fctInfos The fct infos.
     */
    public function setFctInfos($fctInfos) {
        $this->fctInfos = $fctInfos;
        return $this;
    }
}
