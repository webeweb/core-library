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
 * Lib cachet aem trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCachetAemTrait {

    /**
     * Lib cachet aem.
     *
     * @var string
     */
    private $libCachetAem;

    /**
     * Get the lib cachet aem.
     *
     * @return string Returns the lib cachet aem.
     */
    public function getLibCachetAem() {
        return $this->libCachetAem;
    }

    /**
     * Set the lib cachet aem.
     *
     * @param string $libCachetAem The lib cachet aem.
     */
    public function setLibCachetAem($libCachetAem) {
        $this->libCachetAem = $libCachetAem;
        return $this;
    }
}
