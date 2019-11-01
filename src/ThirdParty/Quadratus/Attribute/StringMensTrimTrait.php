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
 * Mens trim trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMensTrimTrait {

    /**
     * Mens trim.
     *
     * @var string
     */
    private $mensTrim;

    /**
     * Get the mens trim.
     *
     * @return string Returns the mens trim.
     */
    public function getMensTrim() {
        return $this->mensTrim;
    }

    /**
     * Set the mens trim.
     *
     * @param string $mensTrim The mens trim.
     */
    public function setMensTrim($mensTrim) {
        $this->mensTrim = $mensTrim;
        return $this;
    }
}
