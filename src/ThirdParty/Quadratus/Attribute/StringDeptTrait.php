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
 * Dept trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDeptTrait {

    /**
     * Dept.
     *
     * @var string
     */
    private $dept;

    /**
     * Get the dept.
     *
     * @return string Returns the dept.
     */
    public function getDept() {
        return $this->dept;
    }

    /**
     * Set the dept.
     *
     * @param string $dept The dept.
     */
    public function setDept($dept) {
        $this->dept = $dept;
        return $this;
    }
}
