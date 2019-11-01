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
 * Bl num fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntBlNumFactTrait {

    /**
     * Bl num fact.
     *
     * @var int
     */
    private $blNumFact;

    /**
     * Get the bl num fact.
     *
     * @return int Returns the bl num fact.
     */
    public function getBlNumFact() {
        return $this->blNumFact;
    }

    /**
     * Set the bl num fact.
     *
     * @param int $blNumFact The bl num fact.
     */
    public function setBlNumFact($blNumFact) {
        $this->blNumFact = $blNumFact;
        return $this;
    }
}
