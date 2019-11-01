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
 * Limiter visu agenda trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolLimiterVisuAgendaTrait {

    /**
     * Limiter visu agenda.
     *
     * @var bool
     */
    private $limiterVisuAgenda;

    /**
     * Get the limiter visu agenda.
     *
     * @return bool Returns the limiter visu agenda.
     */
    public function getLimiterVisuAgenda() {
        return $this->limiterVisuAgenda;
    }

    /**
     * Set the limiter visu agenda.
     *
     * @param bool $limiterVisuAgenda The limiter visu agenda.
     */
    public function setLimiterVisuAgenda($limiterVisuAgenda) {
        $this->limiterVisuAgenda = $limiterVisuAgenda;
        return $this;
    }
}
