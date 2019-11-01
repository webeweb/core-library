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
 * Salaries de trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSalariesDeTrait {

    /**
     * Salaries de.
     *
     * @var string
     */
    private $salariesDe;

    /**
     * Get the salaries de.
     *
     * @return string Returns the salaries de.
     */
    public function getSalariesDe() {
        return $this->salariesDe;
    }

    /**
     * Set the salaries de.
     *
     * @param string $salariesDe The salaries de.
     */
    public function setSalariesDe($salariesDe) {
        $this->salariesDe = $salariesDe;
        return $this;
    }
}
