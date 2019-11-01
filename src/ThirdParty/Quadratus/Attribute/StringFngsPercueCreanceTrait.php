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
 * Fngs percue creance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFngsPercueCreanceTrait {

    /**
     * Fngs percue creance.
     *
     * @var string
     */
    private $fngsPercueCreance;

    /**
     * Get the fngs percue creance.
     *
     * @return string Returns the fngs percue creance.
     */
    public function getFngsPercueCreance() {
        return $this->fngsPercueCreance;
    }

    /**
     * Set the fngs percue creance.
     *
     * @param string $fngsPercueCreance The fngs percue creance.
     */
    public function setFngsPercueCreance($fngsPercueCreance) {
        $this->fngsPercueCreance = $fngsPercueCreance;
        return $this;
    }
}
