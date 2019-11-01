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
 * Unite date ancien college trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringUniteDateAncienCollegeTrait {

    /**
     * Unite date ancien college.
     *
     * @var string
     */
    private $uniteDateAncienCollege;

    /**
     * Get the unite date ancien college.
     *
     * @return string Returns the unite date ancien college.
     */
    public function getUniteDateAncienCollege() {
        return $this->uniteDateAncienCollege;
    }

    /**
     * Set the unite date ancien college.
     *
     * @param string $uniteDateAncienCollege The unite date ancien college.
     */
    public function setUniteDateAncienCollege($uniteDateAncienCollege) {
        $this->uniteDateAncienCollege = $uniteDateAncienCollege;
        return $this;
    }
}
