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
 * Selection trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSelectionTrait {

    /**
     * Selection.
     *
     * @var string
     */
    private $selection;

    /**
     * Get the selection.
     *
     * @return string Returns the selection.
     */
    public function getSelection() {
        return $this->selection;
    }

    /**
     * Set the selection.
     *
     * @param string $selection The selection.
     */
    public function setSelection($selection) {
        $this->selection = $selection;
        return $this;
    }
}
