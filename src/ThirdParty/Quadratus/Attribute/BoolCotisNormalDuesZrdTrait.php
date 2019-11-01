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
 * Cotis normal dues zrd trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCotisNormalDuesZrdTrait {

    /**
     * Cotis normal dues zrd.
     *
     * @var bool
     */
    private $cotisNormalDuesZrd;

    /**
     * Get the cotis normal dues zrd.
     *
     * @return bool Returns the cotis normal dues zrd.
     */
    public function getCotisNormalDuesZrd() {
        return $this->cotisNormalDuesZrd;
    }

    /**
     * Set the cotis normal dues zrd.
     *
     * @param bool $cotisNormalDuesZrd The cotis normal dues zrd.
     */
    public function setCotisNormalDuesZrd($cotisNormalDuesZrd) {
        $this->cotisNormalDuesZrd = $cotisNormalDuesZrd;
        return $this;
    }
}
