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
 * Par trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringParTrait {

    /**
     * Par.
     *
     * @var string
     */
    private $par;

    /**
     * Get the par.
     *
     * @return string Returns the par.
     */
    public function getPar() {
        return $this->par;
    }

    /**
     * Set the par.
     *
     * @param string $par The par.
     */
    public function setPar($par) {
        $this->par = $par;
        return $this;
    }
}
