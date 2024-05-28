<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Fixtures\Provider;

use InvalidArgumentException;
use Psr\Log\LoggerInterface;
use WBW\Library\Common\Provider\AbstractProvider;
use WBW\Library\Common\Provider\RequestInterface;

/**
 * Test abstract provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Fixtures\Provider
 */
class TestAbstractProvider extends AbstractProvider {

    /**
     * Constructor.
     *
     * @param LoggerInterface|null $logger The logger.
     */
    public function __construct(LoggerInterface $logger = null) {
        parent::__construct($logger);
    }

    /**
     * {@inheritDoc}
     */
    public function buildResourcePath(RequestInterface $request): string {
        return parent::buildResourcePath($request);
    }

    /**
     * {@inheritdDoc}
     */
    public function logInfo(string $message, array $context): AbstractProvider {
        return parent::logInfo($message, $context);
    }

    /**
     * {@inheritdDoc}
     */
    public function newMandatoryParameterException(string $parameter): InvalidArgumentException {
        return parent::newMandatoryParameterException($parameter);
    }
}
