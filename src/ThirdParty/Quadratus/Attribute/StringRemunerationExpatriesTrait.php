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
 * Remuneration expatries trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRemunerationExpatriesTrait {

    /**
     * Remuneration expatries.
     *
     * @var string
     */
    private $remunerationExpatries;

    /**
     * Get the remuneration expatries.
     *
     * @return string Returns the remuneration expatries.
     */
    public function getRemunerationExpatries() {
        return $this->remunerationExpatries;
    }

    /**
     * Set the remuneration expatries.
     *
     * @param string $remunerationExpatries The remuneration expatries.
     */
    public function setRemunerationExpatries($remunerationExpatries) {
        $this->remunerationExpatries = $remunerationExpatries;
        return $this;
    }
}
