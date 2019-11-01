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
 * Cotis normal dues zfu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCotisNormalDuesZfuTrait {

    /**
     * Cotis normal dues zfu.
     *
     * @var bool
     */
    private $cotisNormalDuesZfu;

    /**
     * Get the cotis normal dues zfu.
     *
     * @return bool Returns the cotis normal dues zfu.
     */
    public function getCotisNormalDuesZfu() {
        return $this->cotisNormalDuesZfu;
    }

    /**
     * Set the cotis normal dues zfu.
     *
     * @param bool $cotisNormalDuesZfu The cotis normal dues zfu.
     */
    public function setCotisNormalDuesZfu($cotisNormalDuesZfu) {
        $this->cotisNormalDuesZfu = $cotisNormalDuesZfu;
        return $this;
    }
}
