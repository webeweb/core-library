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
 * Urssaf alsace trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolUrssafAlsaceTrait {

    /**
     * Urssaf alsace.
     *
     * @var bool
     */
    private $urssafAlsace;

    /**
     * Get the urssaf alsace.
     *
     * @return bool Returns the urssaf alsace.
     */
    public function getUrssafAlsace() {
        return $this->urssafAlsace;
    }

    /**
     * Set the urssaf alsace.
     *
     * @param bool $urssafAlsace The urssaf alsace.
     */
    public function setUrssafAlsace($urssafAlsace) {
        $this->urssafAlsace = $urssafAlsace;
        return $this;
    }
}
