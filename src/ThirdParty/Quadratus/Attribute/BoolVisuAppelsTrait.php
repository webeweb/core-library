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
 * Visu appels trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolVisuAppelsTrait {

    /**
     * Visu appels.
     *
     * @var bool
     */
    private $visuAppels;

    /**
     * Get the visu appels.
     *
     * @return bool Returns the visu appels.
     */
    public function getVisuAppels() {
        return $this->visuAppels;
    }

    /**
     * Set the visu appels.
     *
     * @param bool $visuAppels The visu appels.
     */
    public function setVisuAppels($visuAppels) {
        $this->visuAppels = $visuAppels;
        return $this;
    }
}
