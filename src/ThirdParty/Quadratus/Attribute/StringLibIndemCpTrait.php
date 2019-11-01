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
 * Lib indem cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibIndemCpTrait {

    /**
     * Lib indem cp.
     *
     * @var string
     */
    private $libIndemCp;

    /**
     * Get the lib indem cp.
     *
     * @return string Returns the lib indem cp.
     */
    public function getLibIndemCp() {
        return $this->libIndemCp;
    }

    /**
     * Set the lib indem cp.
     *
     * @param string $libIndemCp The lib indem cp.
     */
    public function setLibIndemCp($libIndemCp) {
        $this->libIndemCp = $libIndemCp;
        return $this;
    }
}
