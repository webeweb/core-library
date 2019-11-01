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
 * Cdes mail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCdesMailTrait {

    /**
     * Cdes mail.
     *
     * @var bool
     */
    private $cdesMail;

    /**
     * Get the cdes mail.
     *
     * @return bool Returns the cdes mail.
     */
    public function getCdesMail() {
        return $this->cdesMail;
    }

    /**
     * Set the cdes mail.
     *
     * @param bool $cdesMail The cdes mail.
     */
    public function setCdesMail($cdesMail) {
        $this->cdesMail = $cdesMail;
        return $this;
    }
}
