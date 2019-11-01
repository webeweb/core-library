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
 * Confirmes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntConfirmesTrait {

    /**
     * Confirmes.
     *
     * @var int
     */
    private $confirmes;

    /**
     * Get the confirmes.
     *
     * @return int Returns the confirmes.
     */
    public function getConfirmes() {
        return $this->confirmes;
    }

    /**
     * Set the confirmes.
     *
     * @param int $confirmes The confirmes.
     */
    public function setConfirmes($confirmes) {
        $this->confirmes = $confirmes;
        return $this;
    }
}
