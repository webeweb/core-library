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
 * Fngs percue trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFngsPercueTrait {

    /**
     * Fngs percue.
     *
     * @var bool
     */
    private $fngsPercue;

    /**
     * Get the fngs percue.
     *
     * @return bool Returns the fngs percue.
     */
    public function getFngsPercue() {
        return $this->fngsPercue;
    }

    /**
     * Set the fngs percue.
     *
     * @param bool $fngsPercue The fngs percue.
     */
    public function setFngsPercue($fngsPercue) {
        $this->fngsPercue = $fngsPercue;
        return $this;
    }
}
