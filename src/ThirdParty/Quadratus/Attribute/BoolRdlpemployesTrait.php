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
 * Rdlpemployes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRdlpemployesTrait {

    /**
     * Rdlpemployes.
     *
     * @var bool
     */
    private $rdlpemployes;

    /**
     * Get the rdlpemployes.
     *
     * @return bool Returns the rdlpemployes.
     */
    public function getRdlpemployes() {
        return $this->rdlpemployes;
    }

    /**
     * Set the rdlpemployes.
     *
     * @param bool $rdlpemployes The rdlpemployes.
     */
    public function setRdlpemployes($rdlpemployes) {
        $this->rdlpemployes = $rdlpemployes;
        return $this;
    }
}
