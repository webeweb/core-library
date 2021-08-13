<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Validation\Rule;

use WBW\Library\Validation\API\RuleInterface;

/**
 * Abstract rule.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Validation\Rule
 * @abstract
 */
abstract class AbstractRule implements RuleInterface {

    /**
     * Name.
     *
     * @var string
     */
    private $name;

    /**
     * Constructor.
     *
     * @param string $name The name.
     */
    protected function __construct(string $name) {
        $this->setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * Set the name.
     *
     * @param string $name The name.
     * @return RuleInterface Returns this rule.
     */
    protected function setName(string $name): RuleInterface {
        $this->name = $name;
        return $this;
    }
}
