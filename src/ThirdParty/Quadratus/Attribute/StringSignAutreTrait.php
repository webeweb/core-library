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
 * Sign autre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSignAutreTrait {

    /**
     * Sign autre.
     *
     * @var string
     */
    private $signAutre;

    /**
     * Get the sign autre.
     *
     * @return string Returns the sign autre.
     */
    public function getSignAutre() {
        return $this->signAutre;
    }

    /**
     * Set the sign autre.
     *
     * @param string $signAutre The sign autre.
     */
    public function setSignAutre($signAutre) {
        $this->signAutre = $signAutre;
        return $this;
    }
}
