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
 * Ed bordereau trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEdBordereauTrait {

    /**
     * Ed bordereau.
     *
     * @var bool
     */
    private $edBordereau;

    /**
     * Get the ed bordereau.
     *
     * @return bool Returns the ed bordereau.
     */
    public function getEdBordereau() {
        return $this->edBordereau;
    }

    /**
     * Set the ed bordereau.
     *
     * @param bool $edBordereau The ed bordereau.
     */
    public function setEdBordereau($edBordereau) {
        $this->edBordereau = $edBordereau;
        return $this;
    }
}
