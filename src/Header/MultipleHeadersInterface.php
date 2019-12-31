<?php

/**
 * @see       https://github.com/laminas/laminas-mail for the canonical source repository
 * @copyright https://github.com/laminas/laminas-mail/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-mail/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Mail\Header;

/**
 * @category   Laminas
 * @package    Laminas_Mail
 */
interface MultipleHeadersInterface extends HeaderInterface
{
    public function toStringMultipleHeaders(array $headers);
}
