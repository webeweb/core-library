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
 * X fer fact edit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerFactEditTrait {

    /**
     * X fer fact edit.
     *
     * @var bool
     */
    private $xFerFactEdit;

    /**
     * Get the x fer fact edit.
     *
     * @return bool Returns the x fer fact edit.
     */
    public function getXFerFactEdit() {
        return $this->xFerFactEdit;
    }

    /**
     * Set the x fer fact edit.
     *
     * @param bool $xFerFactEdit The x fer fact edit.
     */
    public function setXFerFactEdit($xFerFactEdit) {
        $this->xFerFactEdit = $xFerFactEdit;
        return $this;
    }
}
