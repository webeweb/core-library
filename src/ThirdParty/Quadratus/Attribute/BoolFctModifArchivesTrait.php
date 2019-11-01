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
 * Fct modif archives trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFctModifArchivesTrait {

    /**
     * Fct modif archives.
     *
     * @var bool
     */
    private $fctModifArchives;

    /**
     * Get the fct modif archives.
     *
     * @return bool Returns the fct modif archives.
     */
    public function getFctModifArchives() {
        return $this->fctModifArchives;
    }

    /**
     * Set the fct modif archives.
     *
     * @param bool $fctModifArchives The fct modif archives.
     */
    public function setFctModifArchives($fctModifArchives) {
        $this->fctModifArchives = $fctModifArchives;
        return $this;
    }
}
