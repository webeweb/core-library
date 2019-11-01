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
 * Interdire acces entete trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolInterdireAccesEnteteTrait {

    /**
     * Interdire acces entete.
     *
     * @var bool
     */
    private $interdireAccesEntete;

    /**
     * Get the interdire acces entete.
     *
     * @return bool Returns the interdire acces entete.
     */
    public function getInterdireAccesEntete() {
        return $this->interdireAccesEntete;
    }

    /**
     * Set the interdire acces entete.
     *
     * @param bool $interdireAccesEntete The interdire acces entete.
     */
    public function setInterdireAccesEntete($interdireAccesEntete) {
        $this->interdireAccesEntete = $interdireAccesEntete;
        return $this;
    }
}
