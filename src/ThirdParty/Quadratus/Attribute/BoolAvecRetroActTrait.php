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
 * Avec retro act trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAvecRetroActTrait {

    /**
     * Avec retro act.
     *
     * @var bool
     */
    private $avecRetroAct;

    /**
     * Get the avec retro act.
     *
     * @return bool Returns the avec retro act.
     */
    public function getAvecRetroAct() {
        return $this->avecRetroAct;
    }

    /**
     * Set the avec retro act.
     *
     * @param bool $avecRetroAct The avec retro act.
     */
    public function setAvecRetroAct($avecRetroAct) {
        $this->avecRetroAct = $avecRetroAct;
        return $this;
    }
}
