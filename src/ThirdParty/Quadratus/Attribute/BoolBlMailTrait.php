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
 * Bl mail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBlMailTrait {

    /**
     * Bl mail.
     *
     * @var bool
     */
    private $blMail;

    /**
     * Get the bl mail.
     *
     * @return bool Returns the bl mail.
     */
    public function getBlMail() {
        return $this->blMail;
    }

    /**
     * Set the bl mail.
     *
     * @param bool $blMail The bl mail.
     */
    public function setBlMail($blMail) {
        $this->blMail = $blMail;
        return $this;
    }
}
