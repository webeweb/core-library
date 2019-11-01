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
 * Sub partiel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSubPartielTrait {

    /**
     * Sub partiel.
     *
     * @var bool
     */
    private $subPartiel;

    /**
     * Get the sub partiel.
     *
     * @return bool Returns the sub partiel.
     */
    public function getSubPartiel() {
        return $this->subPartiel;
    }

    /**
     * Set the sub partiel.
     *
     * @param bool $subPartiel The sub partiel.
     */
    public function setSubPartiel($subPartiel) {
        $this->subPartiel = $subPartiel;
        return $this;
    }
}
