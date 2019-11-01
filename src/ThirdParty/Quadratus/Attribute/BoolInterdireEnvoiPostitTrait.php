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
 * Interdire envoi postit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolInterdireEnvoiPostitTrait {

    /**
     * Interdire envoi postit.
     *
     * @var bool
     */
    private $interdireEnvoiPostit;

    /**
     * Get the interdire envoi postit.
     *
     * @return bool Returns the interdire envoi postit.
     */
    public function getInterdireEnvoiPostit() {
        return $this->interdireEnvoiPostit;
    }

    /**
     * Set the interdire envoi postit.
     *
     * @param bool $interdireEnvoiPostit The interdire envoi postit.
     */
    public function setInterdireEnvoiPostit($interdireEnvoiPostit) {
        $this->interdireEnvoiPostit = $interdireEnvoiPostit;
        return $this;
    }
}
