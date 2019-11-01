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
 * Devis mail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDevisMailTrait {

    /**
     * Devis mail.
     *
     * @var bool
     */
    private $devisMail;

    /**
     * Get the devis mail.
     *
     * @return bool Returns the devis mail.
     */
    public function getDevisMail() {
        return $this->devisMail;
    }

    /**
     * Set the devis mail.
     *
     * @param bool $devisMail The devis mail.
     */
    public function setDevisMail($devisMail) {
        $this->devisMail = $devisMail;
        return $this;
    }
}
