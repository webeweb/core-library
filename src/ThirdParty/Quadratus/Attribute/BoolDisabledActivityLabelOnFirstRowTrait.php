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
 * Disabled activity label on first row trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDisabledActivityLabelOnFirstRowTrait {

    /**
     * Disabled activity label on first row.
     *
     * @var bool
     */
    private $disabledActivityLabelOnFirstRow;

    /**
     * Get the disabled activity label on first row.
     *
     * @return bool Returns the disabled activity label on first row.
     */
    public function getDisabledActivityLabelOnFirstRow() {
        return $this->disabledActivityLabelOnFirstRow;
    }

    /**
     * Set the disabled activity label on first row.
     *
     * @param bool $disabledActivityLabelOnFirstRow The disabled activity label on first row.
     */
    public function setDisabledActivityLabelOnFirstRow($disabledActivityLabelOnFirstRow) {
        $this->disabledActivityLabelOnFirstRow = $disabledActivityLabelOnFirstRow;
        return $this;
    }
}
