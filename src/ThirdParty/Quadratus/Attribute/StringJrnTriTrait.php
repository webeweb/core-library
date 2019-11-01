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
 * Jrn tri trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringJrnTriTrait {

    /**
     * Jrn tri.
     *
     * @var string
     */
    private $jrnTri;

    /**
     * Get the jrn tri.
     *
     * @return string Returns the jrn tri.
     */
    public function getJrnTri() {
        return $this->jrnTri;
    }

    /**
     * Set the jrn tri.
     *
     * @param string $jrnTri The jrn tri.
     */
    public function setJrnTri($jrnTri) {
        $this->jrnTri = $jrnTri;
        return $this;
    }
}
