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
 * Modif en vue trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolModifEnVueTrait {

    /**
     * Modif en vue.
     *
     * @var bool
     */
    private $modifEnVue;

    /**
     * Get the modif en vue.
     *
     * @return bool Returns the modif en vue.
     */
    public function getModifEnVue() {
        return $this->modifEnVue;
    }

    /**
     * Set the modif en vue.
     *
     * @param bool $modifEnVue The modif en vue.
     */
    public function setModifEnVue($modifEnVue) {
        $this->modifEnVue = $modifEnVue;
        return $this;
    }
}
