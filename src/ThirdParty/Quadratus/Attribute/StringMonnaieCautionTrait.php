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
 * Monnaie caution trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMonnaieCautionTrait {

    /**
     * Monnaie caution.
     *
     * @var string
     */
    private $monnaieCaution;

    /**
     * Get the monnaie caution.
     *
     * @return string Returns the monnaie caution.
     */
    public function getMonnaieCaution() {
        return $this->monnaieCaution;
    }

    /**
     * Set the monnaie caution.
     *
     * @param string $monnaieCaution The monnaie caution.
     */
    public function setMonnaieCaution($monnaieCaution) {
        $this->monnaieCaution = $monnaieCaution;
        return $this;
    }
}
