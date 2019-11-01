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
 * Bloc da trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBlocDaTrait {

    /**
     * Bloc da.
     *
     * @var bool
     */
    private $blocDa;

    /**
     * Get the bloc da.
     *
     * @return bool Returns the bloc da.
     */
    public function getBlocDa() {
        return $this->blocDa;
    }

    /**
     * Set the bloc da.
     *
     * @param bool $blocDa The bloc da.
     */
    public function setBlocDa($blocDa) {
        $this->blocDa = $blocDa;
        return $this;
    }
}
