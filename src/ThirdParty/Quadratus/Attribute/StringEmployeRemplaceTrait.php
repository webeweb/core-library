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
 * Employe remplace trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEmployeRemplaceTrait {

    /**
     * Employe remplace.
     *
     * @var string
     */
    private $employeRemplace;

    /**
     * Get the employe remplace.
     *
     * @return string Returns the employe remplace.
     */
    public function getEmployeRemplace() {
        return $this->employeRemplace;
    }

    /**
     * Set the employe remplace.
     *
     * @param string $employeRemplace The employe remplace.
     */
    public function setEmployeRemplace($employeRemplace) {
        $this->employeRemplace = $employeRemplace;
        return $this;
    }
}
