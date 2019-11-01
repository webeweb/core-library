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
 * X fer cli docs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerCliDocsTrait {

    /**
     * X fer cli docs.
     *
     * @var bool
     */
    private $xFerCliDocs;

    /**
     * Get the x fer cli docs.
     *
     * @return bool Returns the x fer cli docs.
     */
    public function getXFerCliDocs() {
        return $this->xFerCliDocs;
    }

    /**
     * Set the x fer cli docs.
     *
     * @param bool $xFerCliDocs The x fer cli docs.
     */
    public function setXFerCliDocs($xFerCliDocs) {
        $this->xFerCliDocs = $xFerCliDocs;
        return $this;
    }
}
