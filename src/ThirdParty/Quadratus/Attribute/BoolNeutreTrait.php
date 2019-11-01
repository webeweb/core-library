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
 * Neutre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNeutreTrait {

    /**
     * Neutre.
     *
     * @var bool
     */
    private $neutre;

    /**
     * Get the neutre.
     *
     * @return bool Returns the neutre.
     */
    public function getNeutre() {
        return $this->neutre;
    }

    /**
     * Set the neutre.
     *
     * @param bool $neutre The neutre.
     */
    public function setNeutre($neutre) {
        $this->neutre = $neutre;
        return $this;
    }
}
