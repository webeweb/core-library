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
 * Cotis normal dues trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCotisNormalDuesTrait {

    /**
     * Cotis normal dues.
     *
     * @var bool
     */
    private $cotisNormalDues;

    /**
     * Get the cotis normal dues.
     *
     * @return bool Returns the cotis normal dues.
     */
    public function getCotisNormalDues() {
        return $this->cotisNormalDues;
    }

    /**
     * Set the cotis normal dues.
     *
     * @param bool $cotisNormalDues The cotis normal dues.
     */
    public function setCotisNormalDues($cotisNormalDues) {
        $this->cotisNormalDues = $cotisNormalDues;
        return $this;
    }
}
