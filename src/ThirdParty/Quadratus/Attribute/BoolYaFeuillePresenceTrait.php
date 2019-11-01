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
 * Ya feuille presence trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolYaFeuillePresenceTrait {

    /**
     * Ya feuille presence.
     *
     * @var bool
     */
    private $yaFeuillePresence;

    /**
     * Get the ya feuille presence.
     *
     * @return bool Returns the ya feuille presence.
     */
    public function getYaFeuillePresence() {
        return $this->yaFeuillePresence;
    }

    /**
     * Set the ya feuille presence.
     *
     * @param bool $yaFeuillePresence The ya feuille presence.
     */
    public function setYaFeuillePresence($yaFeuillePresence) {
        $this->yaFeuillePresence = $yaFeuillePresence;
        return $this;
    }
}
