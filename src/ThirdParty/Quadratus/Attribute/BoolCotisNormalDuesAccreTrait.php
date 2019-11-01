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
 * Cotis normal dues accre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCotisNormalDuesAccreTrait {

    /**
     * Cotis normal dues accre.
     *
     * @var bool
     */
    private $cotisNormalDuesAccre;

    /**
     * Get the cotis normal dues accre.
     *
     * @return bool Returns the cotis normal dues accre.
     */
    public function getCotisNormalDuesAccre() {
        return $this->cotisNormalDuesAccre;
    }

    /**
     * Set the cotis normal dues accre.
     *
     * @param bool $cotisNormalDuesAccre The cotis normal dues accre.
     */
    public function setCotisNormalDuesAccre($cotisNormalDuesAccre) {
        $this->cotisNormalDuesAccre = $cotisNormalDuesAccre;
        return $this;
    }
}
