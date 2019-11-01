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
 * Dept naissance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDeptNaissanceTrait {

    /**
     * Dept naissance.
     *
     * @var string
     */
    private $deptNaissance;

    /**
     * Get the dept naissance.
     *
     * @return string Returns the dept naissance.
     */
    public function getDeptNaissance() {
        return $this->deptNaissance;
    }

    /**
     * Set the dept naissance.
     *
     * @param string $deptNaissance The dept naissance.
     */
    public function setDeptNaissance($deptNaissance) {
        $this->deptNaissance = $deptNaissance;
        return $this;
    }
}
