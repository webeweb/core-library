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
 * Modifie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolModifieTrait {

    /**
     * Modifie.
     *
     * @var bool
     */
    private $modifie;

    /**
     * Get the modifie.
     *
     * @return bool Returns the modifie.
     */
    public function getModifie() {
        return $this->modifie;
    }

    /**
     * Set the modifie.
     *
     * @param bool $modifie The modifie.
     */
    public function setModifie($modifie) {
        $this->modifie = $modifie;
        return $this;
    }
}
