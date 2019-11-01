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
 * Edit qpxl absences trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEditQpxlAbsencesTrait {

    /**
     * Edit qpxl absences.
     *
     * @var bool
     */
    private $editQpxlAbsences;

    /**
     * Get the edit qpxl absences.
     *
     * @return bool Returns the edit qpxl absences.
     */
    public function getEditQpxlAbsences() {
        return $this->editQpxlAbsences;
    }

    /**
     * Set the edit qpxl absences.
     *
     * @param bool $editQpxlAbsences The edit qpxl absences.
     */
    public function setEditQpxlAbsences($editQpxlAbsences) {
        $this->editQpxlAbsences = $editQpxlAbsences;
        return $this;
    }
}
