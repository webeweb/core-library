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
 * Interdire acces supp doc arch trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolInterdireAccesSuppDocArchTrait {

    /**
     * Interdire acces supp doc arch.
     *
     * @var bool
     */
    private $interdireAccesSuppDocArch;

    /**
     * Get the interdire acces supp doc arch.
     *
     * @return bool Returns the interdire acces supp doc arch.
     */
    public function getInterdireAccesSuppDocArch() {
        return $this->interdireAccesSuppDocArch;
    }

    /**
     * Set the interdire acces supp doc arch.
     *
     * @param bool $interdireAccesSuppDocArch The interdire acces supp doc arch.
     */
    public function setInterdireAccesSuppDocArch($interdireAccesSuppDocArch) {
        $this->interdireAccesSuppDocArch = $interdireAccesSuppDocArch;
        return $this;
    }
}
