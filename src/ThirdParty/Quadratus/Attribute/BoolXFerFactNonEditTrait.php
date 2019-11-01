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
 * X fer fact non edit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerFactNonEditTrait {

    /**
     * X fer fact non edit.
     *
     * @var bool
     */
    private $xFerFactNonEdit;

    /**
     * Get the x fer fact non edit.
     *
     * @return bool Returns the x fer fact non edit.
     */
    public function getXFerFactNonEdit() {
        return $this->xFerFactNonEdit;
    }

    /**
     * Set the x fer fact non edit.
     *
     * @param bool $xFerFactNonEdit The x fer fact non edit.
     */
    public function setXFerFactNonEdit($xFerFactNonEdit) {
        $this->xFerFactNonEdit = $xFerFactNonEdit;
        return $this;
    }
}
