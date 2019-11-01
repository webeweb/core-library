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
 * Forma pro code assuj trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFormaProCodeAssujTrait {

    /**
     * Forma pro code assuj.
     *
     * @var string
     */
    private $formaProCodeAssuj;

    /**
     * Get the forma pro code assuj.
     *
     * @return string Returns the forma pro code assuj.
     */
    public function getFormaProCodeAssuj() {
        return $this->formaProCodeAssuj;
    }

    /**
     * Set the forma pro code assuj.
     *
     * @param string $formaProCodeAssuj The forma pro code assuj.
     */
    public function setFormaProCodeAssuj($formaProCodeAssuj) {
        $this->formaProCodeAssuj = $formaProCodeAssuj;
        return $this;
    }
}
