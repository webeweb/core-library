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
 * Cotis normal dues zrrzru trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCotisNormalDuesZrrzruTrait {

    /**
     * Cotis normal dues zrrzru.
     *
     * @var bool
     */
    private $cotisNormalDuesZrrzru;

    /**
     * Get the cotis normal dues zrrzru.
     *
     * @return bool Returns the cotis normal dues zrrzru.
     */
    public function getCotisNormalDuesZrrzru() {
        return $this->cotisNormalDuesZrrzru;
    }

    /**
     * Set the cotis normal dues zrrzru.
     *
     * @param bool $cotisNormalDuesZrrzru The cotis normal dues zrrzru.
     */
    public function setCotisNormalDuesZrrzru($cotisNormalDuesZrrzru) {
        $this->cotisNormalDuesZrrzru = $cotisNormalDuesZrrzru;
        return $this;
    }
}
