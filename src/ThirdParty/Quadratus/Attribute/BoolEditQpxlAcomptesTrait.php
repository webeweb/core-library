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
 * Edit qpxl acomptes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEditQpxlAcomptesTrait {

    /**
     * Edit qpxl acomptes.
     *
     * @var bool
     */
    private $editQpxlAcomptes;

    /**
     * Get the edit qpxl acomptes.
     *
     * @return bool Returns the edit qpxl acomptes.
     */
    public function getEditQpxlAcomptes() {
        return $this->editQpxlAcomptes;
    }

    /**
     * Set the edit qpxl acomptes.
     *
     * @param bool $editQpxlAcomptes The edit qpxl acomptes.
     */
    public function setEditQpxlAcomptes($editQpxlAcomptes) {
        $this->editQpxlAcomptes = $editQpxlAcomptes;
        return $this;
    }
}
