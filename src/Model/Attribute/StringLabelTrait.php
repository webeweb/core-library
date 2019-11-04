<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Attribute;

/**
 * String label trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait StringLabelTrait {

    /**
     * Label.
     *
     * @var string
     */
    protected $label;

    /**
     * Get the label.
     *
     * @return string Returns the label.
     */
    public function getLabel() {
        return $this->label;
    }

    /**
     * Set the label.
     *
     * @param string $label The label.
     */
    public function setLabel($label) {
        $this->label = $label;
        return $this;
    }
}
