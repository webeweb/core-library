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
 * Modif droits asp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolModifDroitsAspTrait {

    /**
     * Modif droits asp.
     *
     * @var bool
     */
    private $modifDroitsAsp;

    /**
     * Get the modif droits asp.
     *
     * @return bool Returns the modif droits asp.
     */
    public function getModifDroitsAsp() {
        return $this->modifDroitsAsp;
    }

    /**
     * Set the modif droits asp.
     *
     * @param bool $modifDroitsAsp The modif droits asp.
     */
    public function setModifDroitsAsp($modifDroitsAsp) {
        $this->modifDroitsAsp = $modifDroitsAsp;
        return $this;
    }
}
