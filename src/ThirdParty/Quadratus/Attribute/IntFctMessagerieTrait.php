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
 * Fct messagerie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntFctMessagerieTrait {

    /**
     * Fct messagerie.
     *
     * @var int
     */
    private $fctMessagerie;

    /**
     * Get the fct messagerie.
     *
     * @return int Returns the fct messagerie.
     */
    public function getFctMessagerie() {
        return $this->fctMessagerie;
    }

    /**
     * Set the fct messagerie.
     *
     * @param int $fctMessagerie The fct messagerie.
     */
    public function setFctMessagerie($fctMessagerie) {
        $this->fctMessagerie = $fctMessagerie;
        return $this;
    }
}
