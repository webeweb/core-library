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
 * Edit qpxl tri emp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEditQpxlTriEmpTrait {

    /**
     * Edit qpxl tri emp.
     *
     * @var string
     */
    private $editQpxlTriEmp;

    /**
     * Get the edit qpxl tri emp.
     *
     * @return string Returns the edit qpxl tri emp.
     */
    public function getEditQpxlTriEmp() {
        return $this->editQpxlTriEmp;
    }

    /**
     * Set the edit qpxl tri emp.
     *
     * @param string $editQpxlTriEmp The edit qpxl tri emp.
     */
    public function setEditQpxlTriEmp($editQpxlTriEmp) {
        $this->editQpxlTriEmp = $editQpxlTriEmp;
        return $this;
    }
}
