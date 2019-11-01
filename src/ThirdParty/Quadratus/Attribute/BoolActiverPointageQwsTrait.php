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
 * Activer pointage qws trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolActiverPointageQwsTrait {

    /**
     * Activer pointage qws.
     *
     * @var bool
     */
    private $activerPointageQws;

    /**
     * Get the activer pointage qws.
     *
     * @return bool Returns the activer pointage qws.
     */
    public function getActiverPointageQws() {
        return $this->activerPointageQws;
    }

    /**
     * Set the activer pointage qws.
     *
     * @param bool $activerPointageQws The activer pointage qws.
     */
    public function setActiverPointageQws($activerPointageQws) {
        $this->activerPointageQws = $activerPointageQws;
        return $this;
    }
}
