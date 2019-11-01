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
 * Fct archives trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFctArchivesTrait {

    /**
     * Fct archives.
     *
     * @var bool
     */
    private $fctArchives;

    /**
     * Get the fct archives.
     *
     * @return bool Returns the fct archives.
     */
    public function getFctArchives() {
        return $this->fctArchives;
    }

    /**
     * Set the fct archives.
     *
     * @param bool $fctArchives The fct archives.
     */
    public function setFctArchives($fctArchives) {
        $this->fctArchives = $fctArchives;
        return $this;
    }
}
