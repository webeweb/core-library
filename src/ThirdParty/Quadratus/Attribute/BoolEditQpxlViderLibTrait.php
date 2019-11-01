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
 * Edit qpxl vider lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEditQpxlViderLibTrait {

    /**
     * Edit qpxl vider lib.
     *
     * @var bool
     */
    private $editQpxlViderLib;

    /**
     * Get the edit qpxl vider lib.
     *
     * @return bool Returns the edit qpxl vider lib.
     */
    public function getEditQpxlViderLib() {
        return $this->editQpxlViderLib;
    }

    /**
     * Set the edit qpxl vider lib.
     *
     * @param bool $editQpxlViderLib The edit qpxl vider lib.
     */
    public function setEditQpxlViderLib($editQpxlViderLib) {
        $this->editQpxlViderLib = $editQpxlViderLib;
        return $this;
    }
}
