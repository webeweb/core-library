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
 * Profession trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringProfessionTrait {

    /**
     * Profession.
     *
     * @var string
     */
    private $profession;

    /**
     * Get the profession.
     *
     * @return string Returns the profession.
     */
    public function getProfession() {
        return $this->profession;
    }

    /**
     * Set the profession.
     *
     * @param string $profession The profession.
     */
    public function setProfession($profession) {
        $this->profession = $profession;
        return $this;
    }
}
