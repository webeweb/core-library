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
 * Prud college trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPrudCollegeTrait {

    /**
     * Prud college.
     *
     * @var string
     */
    private $prudCollege;

    /**
     * Get the prud college.
     *
     * @return string Returns the prud college.
     */
    public function getPrudCollege() {
        return $this->prudCollege;
    }

    /**
     * Set the prud college.
     *
     * @param string $prudCollege The prud college.
     */
    public function setPrudCollege($prudCollege) {
        $this->prudCollege = $prudCollege;
        return $this;
    }
}
