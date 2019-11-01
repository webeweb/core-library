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
 * Traite editer trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTraiteEditerTrait {

    /**
     * Traite editer.
     *
     * @var bool
     */
    private $traiteEditer;

    /**
     * Get the traite editer.
     *
     * @return bool Returns the traite editer.
     */
    public function getTraiteEditer() {
        return $this->traiteEditer;
    }

    /**
     * Set the traite editer.
     *
     * @param bool $traiteEditer The traite editer.
     */
    public function setTraiteEditer($traiteEditer) {
        $this->traiteEditer = $traiteEditer;
        return $this;
    }
}
