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
 * Age trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAgeTrait {

    /**
     * Age.
     *
     * @var string
     */
    private $age;

    /**
     * Get the age.
     *
     * @return string Returns the age.
     */
    public function getAge() {
        return $this->age;
    }

    /**
     * Set the age.
     *
     * @param string $age The age.
     */
    public function setAge($age) {
        $this->age = $age;
        return $this;
    }
}
