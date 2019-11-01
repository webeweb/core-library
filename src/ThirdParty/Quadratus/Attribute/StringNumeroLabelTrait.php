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
 * Numero label trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumeroLabelTrait {

    /**
     * Numero label.
     *
     * @var string
     */
    private $numeroLabel;

    /**
     * Get the numero label.
     *
     * @return string Returns the numero label.
     */
    public function getNumeroLabel() {
        return $this->numeroLabel;
    }

    /**
     * Set the numero label.
     *
     * @param string $numeroLabel The numero label.
     */
    public function setNumeroLabel($numeroLabel) {
        $this->numeroLabel = $numeroLabel;
        return $this;
    }
}
