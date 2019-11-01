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
 * Faire controle lettrage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFaireControleLettrageTrait {

    /**
     * Faire controle lettrage.
     *
     * @var string
     */
    private $faireControleLettrage;

    /**
     * Get the faire controle lettrage.
     *
     * @return string Returns the faire controle lettrage.
     */
    public function getFaireControleLettrage() {
        return $this->faireControleLettrage;
    }

    /**
     * Set the faire controle lettrage.
     *
     * @param string $faireControleLettrage The faire controle lettrage.
     */
    public function setFaireControleLettrage($faireControleLettrage) {
        $this->faireControleLettrage = $faireControleLettrage;
        return $this;
    }
}
