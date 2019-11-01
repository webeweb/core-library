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
 * Maternite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMaterniteTrait {

    /**
     * Maternite.
     *
     * @var bool
     */
    private $maternite;

    /**
     * Get the maternite.
     *
     * @return bool Returns the maternite.
     */
    public function getMaternite() {
        return $this->maternite;
    }

    /**
     * Set the maternite.
     *
     * @param bool $maternite The maternite.
     */
    public function setMaternite($maternite) {
        $this->maternite = $maternite;
        return $this;
    }
}
