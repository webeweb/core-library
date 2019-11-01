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
 * Confirme trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolConfirmeTrait {

    /**
     * Confirme.
     *
     * @var bool
     */
    private $confirme;

    /**
     * Get the confirme.
     *
     * @return bool Returns the confirme.
     */
    public function getConfirme() {
        return $this->confirme;
    }

    /**
     * Set the confirme.
     *
     * @param bool $confirme The confirme.
     */
    public function setConfirme($confirme) {
        $this->confirme = $confirme;
        return $this;
    }
}
